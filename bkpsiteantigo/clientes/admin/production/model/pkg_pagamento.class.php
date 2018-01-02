<?php
/**
 * @author Moby Telecom
 *
 */
class pkg_pagamentos  {
	
	private $pag_id;
	private $pag_id_user;
	private $pag_tipo;
	private $pag_plano;
	private $pag_tipo_plan;
	private $pag_data_cadastro;
	private $pag_data_alteracao;
	private $pag_data_cancelamento;
	private $pag_data_pagamento;
	private $pag_data_vencimento;
	private $pag_valor;
	private $pag_num_boleto;
	private $pag_status;
	private $pag_link_boleto;
	private $pag_codbarras_boletos;
	
	
	public function  getPagId(){
		return $this->pag_id;
	}
	public function setPagId($pag_id){
		$this->id = $pag_id;
	}
	
	public function  getPagIdUser(){
		return $this->pag_id_user;
	}
	public function setPagIdUser($pag_id_user){
		$this->pag_id_user = $pag_id_user;
	}
	
	public function  getPagTipo(){
		return $this->pag_tipo;
	}
	public function setPagTipo($pag_tipo){
		$this->pag_tipo = $pag_tipo;
	}
	
	public function  getPagPlano(){
		return $this->pag_plano;
	}
	public function setPagPlano($pag_plano){
		$this->pag_plano = $pag_plano;
	}
	
	public function  getPagTipoPlano(){
		return $this->pag_tipo_plan;
	}
	public function setPagTipoPlano($pag_tipo_plano){
		$this->pag_tipo_plan = $pag_tipo_plano;
	}
	
	public function  getPagDataCadastro(){
		return $this->pag_data_cadastro;
	}
	public function setPagDataCadastro($pag_data_cadastro){
		$this->pag_data_cadastro = $pag_data_cadastro;
	}
	
	public function  getPagDataAlteracao(){
		return $this->pag_data_alteracao;
	}
	public function setPagDataAlteracao($pag_data_alteracao){
		$this->pag_data_alteracao = $pag_data_alteracao;
	}
	
	public function  getPagDataCancelamento(){
		return $this->pag_data_cancelamento;
	}
	public function setPagDataCancelamento($pag_data_cancelamento){
		$this->pag_data_cancelamento = $pag_data_cancelamento;
	}
	
	public function  getPagDataPagamento(){
		return $this->pag_data_pagamento;
	}
	public function setPagDataPagamento($pag_data_pagamento){
		$this->pag_data_pagamento = $pag_data_pagamento;
	}
	
	public function  getPagDataVencimento(){
		return $this->pag_data_vencimento;
	}
	
	public function setPagDataVencimento($pag_data_vencimento){
		$this->pag_data_vencimento = $pag_data_vencimento;
	}
	
	public function  getPagValor(){
		return $this->pag_valor;
	}
	public function setPagValor($pag_valor){
		$this->pag_valor = $pag_valor;
	}
	
	public function  getPagNumBoleto(){
		return $this->pag_num_boleto;
	}
	public function setPagNumBoleto($pag_num_boleto){
		$this->pag_num_boleto = $pag_num_boleto;
	}
	
	public function  getPagStatus(){
		return $this->pag_status;
	}
	public function setPagStatus($pag_status){
		$this->pag_status = $pag_status;
	}
	
	public function  getLinkBoleto(){
		return $this->pag_link_boleto;
	}
	public function setLinkBoleto($pag_link_boleto){
		$this->pag_link_boleto = $pag_link_boleto;
	}
	
	public function  getCodbarrasBoleto(){
		return $this->pag_codbarras_boletos;
	}
	public function setCodbarrasBoleto($pag_codbarras_boletos){
		$this->pag_codbarras_boletos = $pag_codbarras_boletos;
	}
	
	
	public function  getInfPag(){
		return $this->pag_inf_pagamento;
	}
	
	public function setInfPag($pag_inf_pagamento){
		$this->pag_inf_pagamento = $pag_inf_pagamento;
	}
	
}
