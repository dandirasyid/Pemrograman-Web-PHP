
                            <?php
                                class Dispenser{
                                    protected $namaMinuman;
                                    protected $volume = 0;
                                    protected $hargaSegelas;
                                    private $volumeGelas = 250;
                                    private $saldo = 10000;
                                    private $jumlahGelas = 7;

                                    // public function
                                    public function default (int $volm, int $saldo, int $jmlhGelas, int $volGelas){
                                        $this -> volume = $volm;
                                        $this-> saldo = $saldo;
                                        $this-> jumlahGelas = $jmlhGelas;
                                        $this-> volumeGelas = $volGelas;
                                    }
                                    // public function cetak dispenser
                                    public function cetakDispenser(){
                                        echo "Volume galon yang ada di dispenser". $this->volume. "ml". "<br/>Saldo yang dimiliki adalah". $this->saldo. "<br/> Dengan sisa jumlah gelas". $this->jumlahGelas. "<br/> Dengan volume gelas berjumlah". $this->volumeGelas; 
                                    }
                                    // public function volume galon
                                    public function volumeGalon(int $volm){
                                        if ($volm > 0) {
                                            $this->volume = $volm;
                                            echo "Kamu telah mengisi volume galon sebanyak". $this->volume. "ml";
                                        }else{
                                            echo "Volume air tidak boleh kosong (kurang dari 0)";
                                        }
                                    }
                                    // public function volume gelas
                                    public function volumeGelas(){
                                        if ($this->volume >= $this->volumeGelas && $this->jumlahGelas > 0){
                                            $this->jumlahGelas--;
                                            $this->volume = $this->volume - $this->volumeGelas;
                                            $this->saldo = $this->saldo + $this->hargaSegelas;
                                            echo "Kamu sudah menuangkan air ke gelas berukuran" . $this->volumeGelas. "ml dengan harga". $this->hargaSegelas;
                                        }elseif ($this->jumlahGelas <= 0){
                                            echo "Gelas tidak tersedia";
                                        }elseif($this->volume < $this->volumeGelas){
                                            echo "Volume air tidak cukup";
                                        }
                                    }
                                    // public function isi ulang volume gelas
                                    public function isiUlangGelas(int $gelas){
                                        $harga = 2000;
                                        $total = $harga * $gelas;
                                        if ($this->saldo >= $total && $total >= $harga){
                                            $this->saldo = $this->saldo - $total;
                                            $this->jumlahGelas = $this->jumlahGelas + $gelas;
                                            echo "Kamu sudah mengisi ulang sebanyak". $gelas. "dengan total harga". $total. "atau harga satuannya". $harga. "/pcs";
                                        }elseif($this->saldo < $total){
                                            echo "Saldo Kamu Tidak Mncukupi, Silahkan Isi Ulang";
                                        }elseif($total < $harga){
                                            echo "Masukkan Jumlah Gelas Sesuai yang Kamu Inginkan";
                                        }
                                    }
                                }
                                class Minuman extends Dispenser{
                                    public function __construct(string $nama, int $harga){
                                        $this->namaMinuman = $nama;
                                        $this->hargaSegelas = $harga;
                                    }
                                    public function cetak(){
                                        echo "Minuman ini adalah". $this-> namaMinuman . "dengan harga". $this->hargaSegelas. "per gelas"; 
                                    }
                                }
                            ?>							