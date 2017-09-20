<?php 
namespace ApiRestNFe\Helpers\Fiscal;

class NfeIde
{

    public $cUF = 35; // codigo uf
    public $cNF = '80070008'; //codigo nota fiscal
    public $natOp = 'VENDA'; //descricao natureza da operacao
    public $indPag = 0;
    public $mod = 65; //55 nf-e emitida em substituição ao modelo 1 ou 1A; 65 = nfc-e utilizada nas operacoes de venda no varejo;
    public $serie = 1; //serie do documento fiscal, preencher com zeros na hiótese de a nf-e nao possuir serie;
    public $nNF = 2;
    public $dhEmi = '2015-02-19T13:48:00-02:00';
    public $dhSaiEnt = null;
    public $tpNF = 1;
    public $idDest = 1;
    public $cMunFG = 3518800; // codgo do municio de ocorrencia do fato gerador
    public $tpImp = 1;
    public $tpEmis = 1;
    public $cDV = 2;
    public $tpAmb = 2;
    public $finNFe =1;
    public $indFinal = 0; //1- nfe normal; 2- nfe complementar; 3 - nfe de ajuste; 4 - devolucao de mercadoria;
    public $indPres = 0; // 0=Não se aplica (por exemplo, Nota Fiscal complementar ou de ajuste); 1=Operação presencial; 2=Operação não presencial, pela Internet; 3=Operação não presencial, Teleatendimento; 4=NFC-e em operação com entrega a domicílio; 5=Operação presencial, fora do estabelecimento; 9=Operação não presencial, outros.
    public $procEmi = '3.10.31';
    public $verProc = null;
    public $dhCont = null;
    public $xJust = null;  

}
