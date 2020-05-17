<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function __construct() {
        parent::__construct();
        
        if(!$this->session->userdata('logado'))
            redirect (base_url ());
        else
            $this->load->model('cadastro_model');
    }
    
    
	public function index()
	{
        $info_page = [
            'arquivo_js' => 'cadastro.js',
            'arquivo_val' => 'cadastro.val.js',
            'csrf_name' => $this->security->get_csrf_token_name(),
            'csrf_hash' => $this->security->get_csrf_hash() 
        ];
		$this->load->view('cadastro', $info_page);
	}
    
    // Via Ajax
    public function consultacpf() {        
        if($this->cadastro_model->existe_cpf(sanitize_cpf($this->input->post('cpf'))))
            echo "false";
        else
            echo "true";
        exit();
    }
    
    
    public function registrar() {
       if(
           !($cpf = sanitize_cpf($this->input->post('cpf'))) ||
           !($nome = sanitize_string($this->input->post('cuidador'), 100, TRUE)) ||
           !($dt_nasc = sanitize_date($this->input->post('dtnasc'))) ||
           !($numero = sanitize_string($this->input->post('numero'), 7)) ||
           !($logradouro = sanitize_string($this->input->post('endereco'), 100, TRUE)) ||
           !($qtd_banheiro = sanitize_int($this->input->post('qtdBanheiro'), 2)) ||
           !($qtd_exclusivo = sanitize_int($this->input->post('qtdExclusivo'), 2)) ||
           !($crianca = sanitize_string($this->input->post('crianca'), 100, TRUE)) || 
           !($dt_nasc_crianca = sanitize_date($this->input->post('dtnasc_crianca')))
        )
            $this->session->set_flashdata('erro', 'Ocorreu algum erro no momento do cadastramento, por favor tente novamente.');
        
        elseif($this->cadastro_model->existe_cpf($cpf))
            $this->session->set_flashdata('erro', 'O CPF informado já está cadastrado em nosso sistema.');
        
        else{

            $dados_cidade = [
                'cidade' => sanitize_string($this->input->post('cidade'), 80, TRUE),
                'estado' => sanitize_option($this->input->post('estado'), 2)
            ];

            if(!$this->cadastro_model->registro('Cidade',$dados_cidade, ['estado' => $dados_cidade['estado'], 'cidade' => $dados_cidade['cidade']])){
                $this->session->set_flashdata('erro', 'Ocorreu algum erro no momento que o sistema tentou cadastrar este <strong>cuidador</strong>. Por favor, tenta novamente, caso o erro ainda continua entre em contato com o responsável.');
                log_message('error', 'No momente de cadastrar a CIDADE no banco de dados.');
                redirect(base_url('cadastro'));
            }

            $dados_endereco =[
                'cep' => sanitize_int($this->input->post('cep'), 8),
                'logradouro' => $logradouro,
                'bairro' => sanitize_string($this->input->post('bairro'), 80, TRUE),
                'Cidade_cidade' => $dados_cidade['cidade'],
                'Cidade_estado' => $dados_cidade['estado']
            ];

            if(!$this->cadastro_model->registro('Endereco',$dados_endereco, ['cep' => $dados_endereco['cep'], 'logradouro' => $dados_endereco['logradouro']])){
                $this->session->set_flashdata('erro', 'Ocorreu algum erro no momento que o sistema tentou cadastrar este <strong>cuidador</strong>. Por favor, tenta novamente, caso o erro ainda continua entre em contato com o responsável.');
                log_message('error', 'No momente de cadastrar a ENDEREÇO no banco de dados.');
                redirect(base_url('cadastro'));
            }
            
            $id_nacio = $this->cadastro_model->get_nacio(sanitize_int($this->input->post('nacionalidade'), 3));
            
            $dados_cuidador = [
                # Cuidadores
                'cpf' => $cpf,
                'nome' => $nome,
                'pele' => sanitize_option($this->input->post('pele')),
                'email' => sanitize_email($this->input->post('email'), 100),
                'tel' => sanitize_int($this->input->post('tel'), 10),
                'cel' => sanitize_int($this->input->post('cel'), 11),
                'dtnasc' => $dt_nasc,
                'genero' => sanitize_option($this->input->post('genero')),
                'numero' => $numero,
                'complemento' => sanitize_string($this->input->post('compl'), 80),
                'municipio' => sanitize_option($this->input->post('municipio'), 1),
                'estado_origem' => sanitize_option($this->input->post('estadoOrigem'), 2),            
                'estadocivil' => sanitize_option($this->input->post('estadocivil'), 2),
                'observacao' => sanitize_string($this->input->post('observacao'), 300),

                # Qualidade de vida
                'vida' => sanitize_option($this->input->post('vida')),            
                'satisfeitosaude' => sanitize_option($this->input->post('satisfeitosaude')),            
                'dorfisica' => sanitize_option($this->input->post('dorfisica')),
                'tratamentomedico' => sanitize_option($this->input->post('tratamentomedico')),
                'qtoaproveita' => sanitize_option($this->input->post('qtoaproveita')),
                'medidavidasentido' => sanitize_option($this->input->post('medidavidasentido')),
                'concentracao' => sanitize_option($this->input->post('concentracao')),
                'segurovida' => sanitize_option($this->input->post('segurovida')),
                'saudavelambiente' => sanitize_option($this->input->post('saudavelambiente')),
                'temenergia' => sanitize_option($this->input->post('temenergia')),
                'aparencia' => sanitize_option($this->input->post('aparencia')),
                'dinheirosuficiente' => sanitize_option($this->input->post('dinheirosuficiente')),
                'informacoes' => sanitize_option($this->input->post('informacoes')),
                'lazer' => sanitize_option($this->input->post('lazer')),
                'locomover' => sanitize_option($this->input->post('locomover')),
                'sono' => sanitize_option($this->input->post('sono')),
                'atividadesdia' => sanitize_option($this->input->post('atividadesdia')),
                'capacidade' => sanitize_option($this->input->post('capacidade')),
                'satisfeitoconsigo' => sanitize_option($this->input->post('satisfeitoconsigo')),
                'satisfeitorelacoes' => sanitize_option($this->input->post('satisfeitorelacoes')),
                'vidasexual' => sanitize_option($this->input->post('vidasexual')),
                'satisfeitoapoio' => sanitize_option($this->input->post('satisfeitoapoio')),
                'satisfeitolocal' => sanitize_option($this->input->post('satisfeitolocal')),
                'servicosaude' => sanitize_option($this->input->post('servicosaude')),
                'meiotransporte' => sanitize_option($this->input->post('meiotransporte')),
                'sentimentosnegativos' => sanitize_option($this->input->post('sentimentosnegativos')),

                # Socioeconômico
                'especiedomicilio' => sanitize_option($this->input->post('especiedomicilio')),
                'domiciliopermanente' => sanitize_option($this->input->post('domiciliopermanente')),
                'qtdbanheiro' => $qtd_banheiro,
                'qtdexclusivo' => $qtd_exclusivo,
                'utiliza' => sanitize_option($this->input->post('utiliza')),
                'esgoto' => sanitize_option($this->input->post('esgoto')),
                'abastecimento' => sanitize_option($this->input->post('abastecimento')),
                'lixo' => sanitize_option($this->input->post('lixo')),
                'energiaeletrica' => sanitize_option($this->input->post('energiaeletrica')),
                'localidade' => sanitize_option($this->input->post('localidade')),
                'outrolocalidade' => sanitize_string($this->input->post('outrolocalidade'), 45),
                'quemmora' => sanitize_option($this->input->post('quemmora')),
                'qtdirmaos' => sanitize_int($this->input->post('qtdIrmaos'), 2),
                'atualmente' => sanitize_option($this->input->post('atualmente')),
                'ocupacao' => sanitize_string($this->input->post('ocupacao'), 45),
                'trabalho' => sanitize_option($this->input->post('trabalho')),
                'renda' => sanitize_option($this->input->post('renda')),
                'rendafamilia' => sanitize_option($this->input->post('rendafamilia')),
                'participacao' => sanitize_option($this->input->post('participacao')),
                'qtdcontribuicao' => sanitize_option($this->input->post('qtdcontribuicao')),
                'qtdpessoarenda' => sanitize_option($this->input->post('qtdpessoarenda')),
                'escolaridade' => sanitize_option($this->input->post('escolaridade')),
                'ensino' => sanitize_option($this->input->post('ensino')),
                'escolaridadepai' => sanitize_option($this->input->post('escolaridadepai')),
                'escolaridademae' => sanitize_option($this->input->post('escolaridademae')),
                'aparelhosom' => sanitize_int($this->input->post('aparelhoSom'), 2),
                'dvd' => sanitize_int($this->input->post('dvd'), 2),
                'geladeira' => sanitize_int($this->input->post('geladeira'), 2),
                'freezer' => sanitize_int($this->input->post('freezer'), 2),
                'maquinalavar' => sanitize_int($this->input->post('maquinaLavar'), 2),
                'computador' => sanitize_int($this->input->post('computador'), 2),
                'tablet' => sanitize_int($this->input->post('tablet'), 2),
                'telefonefixo' => sanitize_int($this->input->post('telefonefixo'), 2),
                'telefonecelular' => sanitize_int($this->input->post('telefonecelular'), 2),
                'tvassinatura' => sanitize_int($this->input->post('tvassinatura'), 2),
                'automoveis' => sanitize_int($this->input->post('automoveis'), 2),
                'motocicletas' => sanitize_int($this->input->post('motocicletas'), 2),
                'convenio' => sanitize_option($this->input->post('convenio')),
                'internet' => sanitize_option($this->input->post('internet')),

                # Chave-estrangeira
                'Endereco_cep' => $dados_endereco['cep'],
                'Endereco_logradouro' => $dados_endereco['logradouro'],
                'Nacio_idnacio' => $id_nacio
                ];
                
                if(!$this->cadastro_model->registro_direto('Cuidador',$dados_cuidador)){
                    $this->session->set_flashdata('erro', 'Ocorreu algum erro no momento que o sistema tentou cadastrar este <strong>cuidador</strong>. Por favor, tenta novamente, caso o erro ainda continua entre em contato com o responsável.');
                    log_message('error', 'No momente de cadastrar a CUIDADOR no banco de dados.');
                    redirect(base_url('cadastro'));
                }

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
                'qtdPessoas' => sanitize_int($this->input->post('qtdPessoas'), 2),
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
            
            if(!$this->cadastro_model->registro_direto('Portador',$dados_portador)){
                $this->session->set_flashdata('erro', 'Ocorreu algum erro no momento que o sistema tentou cadastrar este <strong>cuidador</strong>. Por favor, tenta novamente, caso o erro ainda continua entre em contato com o responsável.');
                log_message('error', 'No momente de cadastrar a PORTADOR no banco de dados.');
                redirect(base_url('cadastro'));
            }
            
            $this->session->set_flashdata('sucesso', 'Cadastramos os dados do cuidador e portador com sucesso.');
            
        }
        
        redirect(base_url('cadastro'));
    }
}
