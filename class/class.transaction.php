<?php
session_start();
class Transaction {

	private $conn_1;
	function __construct(){
		global $conn;
        $this->conn_1 = $conn;
	}

	public function transactionDetails($from_tr,$from_id,$to_tr,$to_id,$product_code,$qty){

		$stmt = "INSERT INTO transaction_details (from_actor,from_actor_id,to_actor,to_actor_id,product_id,qty) VALUES ($from_tr,$from_id,$to_tr,$to_id,$product_code,$qty)";
		
		$query = mysqli_query($this->conn_1,$stmt);
		// echo $stmt;
		if($query){
			$transaction_ID = mysqli_insert_id($this->conn_1);
			// echo 'in Transaction function <br/>';
			if($transaction_ID != 0 || $transaction_ID != ''){
	            $this->debitTransation($transaction_ID,$from_tr,$from_id,$qty,$product_code);
	            $this->creditTransation($transaction_ID,$to_tr,$to_id,$qty,$product_code);
        	}
		}
	}

	public function oneWayTransaction($from_tr,$from_id,$to_tr,$to_id,$product_code,$qty){
		$stmt = "INSERT INTO transaction_details (from_actor,from_actor_id,to_actor,to_actor_id,product_id,qty) VALUES ($from_tr,$from_id,$to_tr,$to_id,$product_code,$qty)";
		$query = mysqli_query($this->conn_1,$stmt);
		if($query){
			$transaction_ID = mysqli_insert_id($this->conn_1);
			// echo 'in Transaction function <br/>';
			if($transaction_ID != 0 || $transaction_ID != ''){
	            $this->debitTransation($transaction_ID,$from_tr,$from_id,$qty,$product_code);
	            // $this->creditTransation($transaction_ID,$to_tr,$to_id,$qty,$product_code);
        	}
			return $transaction_ID;
		}
	}

	public function oneWayTransactionSucceed($transactionID,$qty){
		// echo 'in oneWayTransactionSucceed function';
		$stmt = "SELECT * FROM transaction_details WHERE ID = $transactionID LIMIT 0,1";
		$query = mysqli_query($this->conn_1,$stmt);
		$data = mysqli_fetch_assoc($query);
		// echo $stmt;
		print_r($data);
		$to_tr = $data['to_actor'];
		$to_id = $data['to_actor_id'];
		$product_code = $data['product_id'];
		$this->creditTransation($transactionID,$to_tr,$to_id,$qty,$product_code);
	}

	private function debitTransation($transaction_ID,$actor_type,$actor_id,$qty,$prodID){
        $stmt = "INSERT INTO qty_tracker (transaction_ID,actor_type,actor_id,prod_id,cr_qty,dr_qty) VALUES ($transaction_ID,$actor_type,$actor_id,$prodID,0,$qty)";
        $query = mysqli_query($this->conn_1,$stmt);
    }

    private function creditTransation($transaction_ID,$actor_type,$actor_id,$qty,$prodID){
        $stmt = "INSERT INTO qty_tracker (transaction_ID,actor_type,actor_id,prod_id,cr_qty,dr_qty) VALUES ($transaction_ID,$actor_type,$actor_id,$prodID,$qty,0)";
        $query = mysqli_query($this->conn_1,$stmt);
    }
}

?>