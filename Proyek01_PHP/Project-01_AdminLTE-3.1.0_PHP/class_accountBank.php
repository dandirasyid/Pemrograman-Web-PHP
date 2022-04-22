                            <?php
                                require_once "class_account.php";
                                class BankAccount extends Account{
                                    public $customer;
                                    // membuat construct 
                                    public function __construct($no, int $saldo_pertama, string $custom ){
                                        parent::__construct($no, $saldo_pertama);
                                        $this->customer = $custom;
                                    }
                                    // membuat public function cetak
                                    public function cetak(){
                                        parent::cetak();
                                        echo "<br/> Customer :". $this->customer;
                                    }
                                    // membuat public function transfer
                                    public function transfer ($metode_transfer, $money){
                                        $metode_transfer->deposit($money);
                                        $this->withdraw($money);
                                    }
                                    public function account(){
                                        return $this->nomor;
                                    }
                                    public function saldo(){
                                        return $this->saldo;
                                    }
                                }
                            ?>							
			