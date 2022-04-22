
                            <?php
                                class Account{
                                    protected $nomor;
                                    protected $saldo;

                                    // membuat public functiion construct dahulu
                                    public function __construct($no, int $saldo){
                                        $this->nomor = $no;
                                        $this->saldo = $saldo;
                                    }
                                    // membuat function deposit
                                    public function deposit($money){
                                        $this ->saldo = $this->saldo + $money; 
                                    }
                                    // membuat function withdraw
                                    public function withdraw($money){
                                        $this->saldo = $this->saldo - $money;
                                    }
                                    // membuat function cetak
                                    public function cetak(){
                                        echo "Nomor". $this->nomor. "Saldo :". $this->saldo;            
                                    }
                                }
                            ?>						