<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consulta extends CI_Controller {
    
	public function __construct() {
        parent::__construct();
        
        if(!$this->session->userdata('logado'))
            redirect (base_url());
        else{
            $this->load->model('consulta_model');
            $this->load->helper('mask');
        }
    }
    
	public function index() {
        $info_page = [
            'arquivo_js' => 'consulta.js',
            'arquivo_val' => 'consulta.val.js',
            'csrf_name' => $this->security->get_csrf_token_name(),
            'csrf_hash' => $this->security->get_csrf_hash() 
        ];
		$this->load->view('consulta', $info_page);
	}
    
    
    public function consultar_cuidador() {
       $resultado = $this->consulta_model->getCuidador(sanitize_option($this->input->post('estado'), 2));
       $contador = 1;
       
       foreach ($resultado as $cuidador) {
           
            if(empty($cuidador->cpf) || empty($cuidador->nome) || empty($cuidador->Endereco_cep) || empty($cuidador->Endereco_logradouro) || (empty($cuidador->tel) && empty($cuidador->cel)))
                continue;

            $nome = $this->security->xss_clean($cuidador->nome);
            $endereco = $this->security->xss_clean($cuidador->Endereco_logradouro);

            if(empty($cuidador->tel))
                $tel_cel = '<a href="tel:'.$cuidador->cel.'">'.mask_cel($cuidador->cel).'</a>';
            elseif(empty($cuidador->cel))
                $tel_cel = '<a href="tel:'.$cuidador->tel.'">'.mask_tel($cuidador->tel).'</a>';
            else
                $tel_cel = '<a href="tel:'.$cuidador->cel.'">'.mask_cel($cuidador->cel).'</a>' . ' / '. '<a href="tel:'.$cuidador->tel.'">'. mask_tel($cuidador->tel).'</a>';
            
            echo '<tr>
                    <th scope="row">'.$contador++.'</th>
                    <td>
                        <a class="btn btn-sm btn-success text-center" href="'.base_url('consulta/'.$cuidador->cpf).'" target="_black">
                            <i class="icon-add"><span class="sr-only">Adicionar Portador</span></i>
                        </a>
                    </td>
                    <td>'.$nome.'</td>
                    <td>'.mask_cpf($cuidador->cpf).'</td>
                    <td>'.$tel_cel.'</td>
                    <td><a href="https://www.google.com.br/maps/?q='.$cuidador->Endereco_cep.'+'.$endereco.'" rel="noopener" target="_black">'.mask_cep($cuidador->Endereco_cep).' / '.$endereco.'</a></td>
                </tr>';
       }
        exit();
    }
    
    
    public function add_portador($cpf) {
        $portador = '';
        $cuidador = $this->consulta_model->getCuidadorCpf($cpf);
        if(empty($cuidador->nome))
            die('ERRO: Identificamos que este CPF não está cadastrado em nosso sistema.');
       
        $cuidador->nome = $this->security->xss_clean($cuidador->nome);
        $resultado = $this->consulta_model->getPortador($cpf);
            
            if(!$resultado) 
                $portador = 'Nenhum portador cadastrado.';
            else{
                foreach ($resultado as $p)
                    $portador = $portador. '<li>'.$this->security->xss_clean($p->nome).'</li>';
            }
            
            $info_page = [
                'cpf' => mask_cpf($cpf),
                'nome' => $cuidador->nome,
                'portador' => $portador,
                'arquivo_js' => 'consulta.js',
                'arquivo_val' => 'consulta.val.js',
                'csrf_name' => $this->security->get_csrf_token_name(),
                'csrf_hash' => $this->security->get_csrf_hash() 
            ];
            $this->load->view('add_portador', $info_page);
    }
    
    
    public function registrar_portador() {
        if( !($cpf = sanitize_cpf($this->input->post('cpf_cuidador'))) ||
            !($crianca = sanitize_string($this->input->post('crianca'), 100, TRUE)) ||
            !($dt_nasc_crianca = sanitize_date($this->input->post('dtnasc_crianca'))) ||
            !($qtd_pessoas = sanitize_int($this->input->post('qtdPessoas'), 2)) ) {

            $this->session->set_flashdata('erro', 'Ocorreu algum erro no momento do cadastramento, por favor tente novamente.');
            redirect (base_url ('consulta/'.$cpf));
        }elseif(!$this->consulta_model->existe_cpf($cpf))
            die('ERRO: Identificamos que este CPF não está cadastrado em nosso sistema.');
        
         $dados_portador = [
                'nome' => $crianca,
                'pele' => sanitize_option($this->input->post('pelec')),
                'dtnasc' => $dt_nasc_crianca,
                'dtinicio' => mdate('%Y-%m-%d %H:%i:%s', now()),
                'cuidaboca' => sanitize_option($this->input->post('cuidaBoca')),
                'q_cuidaboca' => sanitize_string($this->input->post('q_cuidaBoca'), 45), 
                'prenatal' => sanitize_option($this->input->post('prenatal')),
                'amaMaterna' => sanitize_option($this->input->post('amaMaterna')),
                'instruDente' => sanitize_option($this->input->post('instruDente')),
                'doenca' => sanitize_option($this->input->post('doenca')),
                'q_doenca' => sanitize_string($this->input->post('q_doenca'), 45),
                'parto' => sanitize_option($this->input->post('parto')),
                'dorcabeca' => sanitize_option($this->input->post('dorcabeca')),
                'dorouvido' => sanitize_option($this->input->post('dorouvido')),
                'infecgarg' => sanitize_option($this->input->post('infecgarg')),
                'infecgargSim' => sanitize_options_select($this->input->post('infecgargSim'), 
                                 $this->input->post('infecgarg')),
                'bateurosto' => sanitize_option($this->input->post('bateurosto')),
                'bateurostoSim' => sanitize_options_select($this->input->post('bateurostoSim'), 
                                 $this->input->post('bateurosto')),
                'probrespira' => sanitize_option($this->input->post('probrespira')),
                'probNeuro' => sanitize_option($this->input->post('probNeuro')),
                'q_probNeuro' => sanitize_string($this->input->post('q_probNeuro'), 45),
                'remedio' => sanitize_option($this->input->post('remedio')),
                'q_remedio' => sanitize_string($this->input->post('q_remedio'), 45),
                'amamentacao' => sanitize_option($this->input->post('amamentacao')),
                'q_amamentacao' => sanitize_options_age($this->input->post('q_amamentacao'),
                                                        $this->input->post('s_amamentacao')),
                'dentista' => sanitize_option($this->input->post('dentista')),
                'tratamento' => sanitize_checkbox($this->input->post('tratamento'), 2),
                'flour' => sanitize_option($this->input->post('flour')),
                'dentelimpo' => sanitize_option($this->input->post('dentelimpo')),
                'limpeza' => sanitize_checkbox($this->input->post('limpeza'), 2),
                'pasta' => sanitize_option($this->input->post('pasta')),
                'colocaPasta' => sanitize_option($this->input->post('colocaPasta')),
                'qtdCreme' => sanitize_option($this->input->post('qtdCreme')),
                'qtdlimpeza' => sanitize_option($this->input->post('qtdlimpeza')),
                'dentelimpeza' => sanitize_option($this->input->post('dentelimpeza')),
                'orientahigiene' => sanitize_option($this->input->post('orientahigiene')),
                'roeunhas' => sanitize_option($this->input->post('roeunhas')),
                'mordeobjetos' => sanitize_option($this->input->post('mordeobjetos')), 
                'mordelabios' => sanitize_option($this->input->post('mordelabios')),
                'ronca' => sanitize_option($this->input->post('ronca')),
                'baba' => sanitize_option($this->input->post('baba')),
                'sonotranquilo' => sanitize_option($this->input->post('sonotranquilo')),
                'mamadeira' => sanitize_option($this->input->post('mamadeira')),
                'q_mamadeira' => sanitize_options_age($this->input->post('q_mamadeira'),
                                                        $this->input->post('s_mamadeira')),
                'chupeta' => sanitize_option($this->input->post('chupeta')),
                'q_chupeta' => sanitize_options_age($this->input->post('q_chupeta'),
                                                        $this->input->post('s_chupeta')),
                'chupouDedo' => sanitize_option($this->input->post('chupouDedo')),
                'q_chupouDedo' => sanitize_options_age($this->input->post('q_chupouDedo'),
                                                        $this->input->post('s_chupouDedo')),
                'formatoChupeta' => sanitize_option($this->input->post('formatoChupeta')),
                'conteudo' => sanitize_option($this->input->post('conteudo')),
                'adocar' => sanitize_option($this->input->post('adocar')),
                'qtdPessoas' => $qtd_pessoas,
                'cortapequeno' => sanitize_option($this->input->post('cortapequeno')),
                'frutas' => sanitize_option($this->input->post('frutas')),
                'legumes' => sanitize_option($this->input->post('legumes')),
                'legumescoz' => sanitize_option($this->input->post('legumescoz')),
                'ingerebife' => sanitize_option($this->input->post('ingerebife')),
                'ingeresalg' => sanitize_option($this->input->post('ingeresalg')),
                'docesindustr' => sanitize_option($this->input->post('docesindustr')),
                'docescaseiros' => sanitize_option($this->input->post('docescaseiros')),
                'biscoito' => sanitize_option($this->input->post('biscoito')),
                'refrigerante' => sanitize_option($this->input->post('refrigerante')),
                'ingereliquidos' => sanitize_option($this->input->post('ingereliquidos')),
                'dificDuro' => sanitize_option($this->input->post('dificDuro')),
                'informativo' => sanitize_option($this->input->post('informativo')),

                # Chave-estrangeira
                'Cuidador_cpf' => $cpf
            ];
        
        if(!$this->consulta_model->reg_portador($dados_portador)){
            $this->session->set_flashdata('erro', 'Ocorreu algum erro no momento que o sistema tentou cadastrar este <strong>portador</strong>. Por favor, tente novamente, caso o erro ainda continua entre em contato com o responsável.');
            log_message('error', 'No momente de ADICIONAR a PORTADOR - CPF.'.$cpf.'. no banco de dados.');
        }else
            $this->session->set_flashdata('sucesso', 'Cadastramos os dados do portador com sucesso.');
        redirect (base_url ('consulta/'.$cpf));
    }
}