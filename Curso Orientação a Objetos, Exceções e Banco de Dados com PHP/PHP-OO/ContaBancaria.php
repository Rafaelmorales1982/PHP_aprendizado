<?php
//modificador de acessos, public, private e protect
//public acessa de qualquer lugar (tudo aberto)
//private acesso fica restrito acessando dentro pela própria classe
//protect parecido com private mas a diferêça consegui acessar a classe da classe pai


//checando a tipagem 
declare(strict_types=1);


//criando uma classe 
class ContaBancaria
{
  //criando propriedades(atributo) da classe para ser acessada pelo objeto $conta

  /** *
   *@var string
   */
  private $banco;
  /** *
   *@var string
   */
  private $nomeTitular;
  /** *
   *@var string
   */
  private $numeroAgencia;
  /** *
   *@var string
   */
  private $numeroConta;
  /** *
   *@var float
   */
  private $saldo;



  //criando um método construtor
  public function __construct(
    string $banco,
    string $nomeTitular,
    string $numeroAgencia,
    string $numeroConta,
    float $saldo
  ) {
    //utilizando this para pegar da classe ContaBancaria
    $this->banco = $banco;
    $this->nomeTitular = $nomeTitular;
    $this->numeroAgencia = $numeroAgencia;
    $this->numeroConta = $numeroConta;
    $this->saldo = $saldo;
  }


  //criando um método (ação do objeto)
  //essa unica forma de pegar os atributos da conta porque estão em modo private

  public function obterSaldo(): string
  {
    return ' Seu saldo atual é : R$ ' . $this->saldo; //pegando da classe
  }


  //criando método pegando $valor somando com saldo
  public function depositar(float $valor): string
  {
    $this->saldo += $valor;
    return 'Deposito de R$ ' . $valor . ' Realizado!';
  }

  //criando método sacar  saldo - valor
  public function sacar(float $valor): string
  {
    $this->saldo -= $valor;
    return 'Saque de R$ ' . $valor . ' Realizado!';
  }
}


//instância da classe da ContaBancaria
//criando objeto
$conta = new ContaBancaria(
  'Banco do Brasil', //banco
  'Gustavo Fraga', //nomeTitular
  '8244', //numeroAgencia
  '57354-10', //numeroConta
   0,  //saldo  


);


$conta2 = new ContaBancaria(
  'Caixa Econômica', //banco
  'Rafael Morales de Lima', //nomeTitular
  '1516', //numeroAgencia
  '57354-10', //numeroConta
  0,


);


echo 'Conta 1';
echo PHP_EOL; //quebra de linha

var_dump($conta);
echo 'Conta 2';
echo PHP_EOL; //quebra de linha

var_dump($conta2);
echo PHP_EOL; //quebra de linha



echo $conta->obterSaldo(); // saldo 0 invocando o método
echo PHP_EOL; //quebra de linha

echo $conta->depositar(300.00);
echo PHP_EOL; //quebra de linha
echo $conta->obterSaldo(); // saldo 300 invocando o método
echo PHP_EOL; //quebra de linha
echo $conta->sacar(150.00); //valor para o saque
echo PHP_EOL; //quebra de linha
echo $conta->obterSaldo();

/**
 * A função var_dump() em PHP é utilizada
 *  para exibir informações 
 * estruturadas sobre uma ou mais variáveis
 */
//var_dump($conta->nomeTitular );

//invocar o método obterSaldo()

//echo $conta->obterSaldo();
