<?php
/**
 * This file is a part of the phpMussel package.
 * Homepage: https://phpmussel.github.io/
 *
 * PHPMUSSEL COPYRIGHT 2013 AND BEYOND BY THE PHPMUSSEL TEAM.
 *
 * Authors:
 * @see PEOPLE.md
 *
 * License: GNU/GPLv2
 * @see LICENSE.txt
 *
 * This file: Portuguese language data for the front-end (last modified: 2018.10.16).
 */

/** Prevents execution from outside of phpMussel. */
if (!defined('phpMussel')) {
    die('[phpMussel] This should not be accessed directly.');
}

$phpMussel['lang']['Extended Description: Chart.js'] = 'Permite que o front-end gere gráficos de pizza.<br /><a href="https://github.com/chartjs/Chart.js">Chart.js</a> está disponível através do <a href="https://opensource.org/licenses/MIT">MIT license</a>.';
$phpMussel['lang']['Extended Description: PHPMailer'] = 'Necessário para usar qualquer funcionalidade que envolva o envio de email.<br /><a href="https://github.com/PHPMailer/PHPMailer">PHPMailer</a> está disponível através do licença <a href="https://github.com/PHPMailer/PHPMailer/blob/master/LICENSE">LGPLv2.1</a>.';
$phpMussel['lang']['Extended Description: phpMussel'] = 'O pacote principal (menos as assinaturas, documentação e configuração).';
$phpMussel['lang']['bNav_home_logout'] = '<a href="?">Página Principal</a> | <a href="?phpmussel-page=logout">Sair</a>';
$phpMussel['lang']['bNav_logout'] = '<a href="?phpmussel-page=logout">Sair</a>';
$phpMussel['lang']['config_PHPMailer_Enable2FA'] = 'Esta diretiva determina se deve usar 2FA para contas front-end.';
$phpMussel['lang']['config_PHPMailer_EventLog'] = 'Um arquivo para registrar todos os eventos em relação ao PHPMailer. Especifique o nome de um arquivo, ou deixe em branco para desabilitar.';
$phpMussel['lang']['config_PHPMailer_Host'] = 'O host SMTP a ser usado para e-mail de saída.';
$phpMussel['lang']['config_PHPMailer_Password'] = 'A senha a ser usada ao enviar e-mail via SMTP.';
$phpMussel['lang']['config_PHPMailer_Port'] = 'O número da porta a ser usado para o e-mail de saída. Padrão = 587.';
$phpMussel['lang']['config_PHPMailer_SMTPAuth'] = 'Esta diretiva determina se autenticar sessões SMTP (geralmente deve ser deixado em paz).';
$phpMussel['lang']['config_PHPMailer_SMTPSecure'] = 'O protocolo a ser usado ao enviar e-mail via SMTP (TLS ou SSL).';
$phpMussel['lang']['config_PHPMailer_SkipAuthProcess'] = 'Definir essa diretiva como <code>true</code> instrui o PHPMailer a ignorar o processo de autenticação que normalmente ocorre ao enviar e-mail via SMTP. Isso deve ser evitado, porque ignorar esse processo pode expor o e-mail de saída a ataques MITM, mas pode ser necessário nos casos em que esse processo impedir que o PHPMailer se conecte a um servidor SMTP.';
$phpMussel['lang']['config_PHPMailer_Username'] = 'O nome de usuário a ser usada ao enviar e-mail via SMTP.';
$phpMussel['lang']['config_PHPMailer_addReplyToAddress'] = 'O endereço de resposta a ser citado ao enviar e-mail via SMTP.';
$phpMussel['lang']['config_PHPMailer_addReplyToName'] = 'O nome da resposta a ser citado ao enviar e-mail via SMTP.';
$phpMussel['lang']['config_PHPMailer_setFromAddress'] = 'O endereço do remetente a ser citado ao enviar e-mail via SMTP.';
$phpMussel['lang']['config_PHPMailer_setFromName'] = 'O nome do remetente a ser citado ao enviar e-mail via SMTP.';
$phpMussel['lang']['config_attack_specific_allow_leading_trailing_dots'] = 'Permitir pontos iniciais e finais em nomes de arquivos? Às vezes, isso pode ser usado para ocultar arquivos, ou enganar alguns sistemas para permitir a passagem de diretórios. False = Não permitir [Padrão]. True = Permitir.';
$phpMussel['lang']['config_attack_specific_archive_file_extensions'] = 'Reconhecidos arquivos extensões (formato é CSV; só deve adicionar ou remover quando problemas ocorrem; desnecessariamente removendo pode causar falso-positivos para aparecer por compactados arquivos, enquanto desnecessariamente adicionando será essencialmente whitelist o que você está adicionando contra ataque específica detecção; modificar com cautela; Também notar que este não tem efeito em qual compactados arquivos podem e não podem ser analisados no escopo de conteúdo). A lista, como é padrão, é do formatos utilizados mais comumente através da maioria dos sistemas e CMS, mas intencionalmente não é necessariamente abrangente.';
$phpMussel['lang']['config_attack_specific_block_control_characters'] = 'Bloquear todos os arquivos que contenham quaisquer caracteres de controle, exceto linha quebras (<code>[\x00-\x08\x0b\x0c\x0e\x1f\x7f]</code>)? Se você está <em><strong>APENAS</strong></em> carregando simple texto, então você pode ativar essa opção para fornecer alguma adicional proteção para o seu sistema. Mas, se você carregar qualquer coisa que não seja de texto simples, ativando isso pode resultas em falso positivos. False = Não bloquear [Padrão]; True = Bloquear.';
$phpMussel['lang']['config_attack_specific_block_macros'] = 'Tente bloquear todos os arquivos que contenham macros? Alguns tipos de documentos e planilhas podem conter macros executáveis, fornecendo assim um perigoso vetor potencial de malware. False = Não bloquear [Padrão]; True = Bloquear.';
$phpMussel['lang']['config_attack_specific_can_contain_php_file_extensions'] = 'Uma lista de extensões de arquivos com permissão para conter código PHP, separadas por vírgulas. Se a detecção de ataques de camaleão PHP estiver ativada, os arquivos que contêm código PHP, que possuem extensões que não estão nesta lista, serão detectados como ataques de camaleão PHP.';
$phpMussel['lang']['config_attack_specific_chameleon_from_exe'] = 'Olha por executável headers em arquivos que são não executáveis nem reconhecidos compactados arquivos e por executáveis cujos headers estão incorretas. False = Inativo; True = Ativo.';
$phpMussel['lang']['config_attack_specific_chameleon_from_php'] = 'Olha por PHP header em arquivos que são não PHP arquivos nem reconhecidos compactados arquivos. False = Inativo; True = Ativo.';
$phpMussel['lang']['config_attack_specific_chameleon_to_archive'] = 'Detectar headers incorretas em arquivos compactados. Suportados: BZ/BZIP2, GZ/GZIP, LZF, RAR, ZIP. False = Inativo; True = Ativo.';
$phpMussel['lang']['config_attack_specific_chameleon_to_doc'] = 'Olha por office documentos cujos headers estão incorretas (Suportados: DOC, DOT, PPS, PPT, XLA, XLS, WIZ). False = Inativo; True = Ativo.';
$phpMussel['lang']['config_attack_specific_chameleon_to_img'] = 'Olha por imagens cujos headers estão incorretas (Suportados: BMP, DIB, PNG, GIF, JPEG, JPG, XCF, PSD, PDD, WEBP). False = Inativo; True = Ativo.';
$phpMussel['lang']['config_attack_specific_chameleon_to_pdf'] = 'Olha por PDF arquivos cujos headers estão incorretas. False = Inativo; True = Ativo.';
$phpMussel['lang']['config_attack_specific_corrupted_exe'] = 'Corrompidos arquivos e erros de análise. False = Ignorar; True = Bloquear [Padrão]. Detectar e bloquear potencialmente corrompidos PE (Portátil Executável) arquivos? Frequentemente (mas não sempre), quando certos aspectos de um PE arquivo é corrompido ou não pode ser analisado corretamente, essa pode ser indicativo de uma viral infecção. Os processos utilizados pela maioria dos anti-vírus programas para detectar vírus em PE arquivos requerem analisando os arquivos de certas maneiras, que, se o programador de um vírus é consciente de, especificamente irá tentar impedir, a fim de permitir seu vírus para permanecer não detectado.';
$phpMussel['lang']['config_attack_specific_decode_threshold'] = 'Opcional limitação para o comprimento dos dados para que dentro de decodificar comandos devem ser detectados (em caso de existirem quaisquer notável problemas de desempenho enquanto analisando). Padrão = 512KB. Zero ou nulo valor desativa o limitação (removendo qualquer limitação baseado em tamanho do arquivo).';
$phpMussel['lang']['config_attack_specific_scannable_threshold'] = 'Opcional limitação para o comprimento dos dados brutos para que phpMussel é permitido a ler e analisar (em caso de existirem quaisquer notável problemas de desempenho enquanto analisando). Padrão = 32MB. Zero ou nulo valor desativa o limitação. Em geral, esse valor não deve ser menor que o médio arquivo tamanho de carregamentos que você quer e espera para receber no seu servidor ou website, não deve ser mais que o filesize_limit directivo, e não deve ser menor que aproximadamente um quinto do total permissível memória alocação concedido para PHP através do "php.ini" configuração arquivo. Esta directiva existe para tentar impedir phpMussel de usando demais memória (que seria impedir-lo de ser capaz de analisando arquivos acima de um certo tamanho com sucesso).';
$phpMussel['lang']['config_compatibility_ignore_upload_errors'] = 'Essa directiva deve ser geralmente desativada a menos que seja necessário por correta funcionalidade de phpMussel no seu específico sistema. Normalmente, quando desativado, quando phpMussel detecta a presença de elementos dentro a <code>$_FILES</code> array(), ele tentará iniciar uma análise dos arquivos que esses elementos representam, e, se esses elementos estão branco ou vazia, phpMussel irá retornar uma erro mensagem. Esse é um apropriado comportamento por phpMussel. Mas, por alguns CMS, vazios elementos podem ocorrer como resultado do natural comportamento dessas CMS, ou erros podem ser reportado quando não houver alguma, nesse caso, o normal comportamento por phpMussel será interferindo com o normal comportamento dessas CMS. Se tal situação ocorre por você, ativando esta opção irá instruir phpMussel para não tentar iniciar um análise por tais vazios elementos, ignorá-los quando encontrado e para não retornar qualquer relacionado erro mensagens, assim, permitindo a continuação da página carga. False = DESATIVADO; True = ATIVADO.';
$phpMussel['lang']['config_compatibility_only_allow_images'] = 'Se você apenas esperar ou apenas tencionar de permitir imagens a ser enviado para seu sistema ou CMS, e se você absolutamente não necessita quaisquer arquivos exceto imagens a ser enviado para seu sistema ou CMS, esta directiva devia ser ATIVADO, mas em outros casos devia ser DESATIVADO. Se esta directiva é ATIVADO, ele irá instruir phpMussel indiscriminadamente bloquear qualquer arquivo carregamento identificado como não imagem, sem os analisar. Isto pode reduzir o tempo de processamento e uso de memória por tentados carregamentos de não imagem arquivos. False = DESATIVADO; True = ATIVADO.';
$phpMussel['lang']['config_experimental'] = 'Instável/Experimental!';
$phpMussel['lang']['config_files_block_encrypted_archives'] = 'Detectar e bloquear compactados arquivos criptografados? Porque phpMussel não é capaz de analisar o conteúdo de arquivos criptografados, é possível que a criptografia de arquivo pode ser empregado por um atacante como meio de tentar contornar phpMussel, analisadores anti-vírus e outras dessas protecções. Instruindo phpMussel para bloquear quaisquer arquivos que ele descobrir a ser criptografada poderia ajudar a reduzir o risco associado a essas tais possibilidades. False = Não; True = Sim [Padrão].';
$phpMussel['lang']['config_files_check_archives'] = 'Tentativa de verificar os conteúdos dos compactados arquivos? False = Não (Não verificar); True = Sim (Verificar) [Padrão].';
$phpMussel['lang']['config_files_filesize_archives'] = 'Herdar o arquivo tamanho blacklist/whitelist para o conteúdo de compactados arquivos? False = Não (greylist tudo); True = Sim [Padrão].';
$phpMussel['lang']['config_files_filesize_limit'] = 'Arquivo tamanho limit. Em KB. 65536 = 64MB [Padrão] 0 = Não limite (sempre greylisted), qualquer (positivo) numérico valor aceite. Isso pode ser útil quando sua PHP configuração limita a quantidade de memória que um processo pode ocupar ou se sua PHP configuração limita o arquivo tamanho de carregamentos.';
$phpMussel['lang']['config_files_filesize_response'] = 'Que fazer com arquivos que excedam o limite de arquivo tamanho (se existir). False = Whitelist; True = Blacklist [Padrão].';
$phpMussel['lang']['config_files_filetype_archives'] = 'Herdar o arquivo tipo blacklist/whitelist para o conteúdo de compactados arquivos? False = Não (greylist tudo); True = Sim [Padrão].';
$phpMussel['lang']['config_files_filetype_blacklist'] = 'Blacklist:';
$phpMussel['lang']['config_files_filetype_greylist'] = 'Greylist:';
$phpMussel['lang']['config_files_filetype_whitelist'] = 'Se o seu sistema só permite certos tipos de arquivos sejam carregado, ou se o seu sistema explicitamente nega certos tipos de arquivos, especificando esses tipos de arquivos no whitelists, blacklists e greylists pode aumentar a velocidado em que a análise é realizada através de permitindo o script para ignorar certos tipos de arquivos. O formato CSV (Comma Separated Values). Se você quer analisar tudo, ao invés de fazendo whitelist, blacklist ou greylist, deixe as variáveis em branco; Isso irá desativar whitelist/blacklist/greylist). Lógico ordem de processamento é: Se o tipo de arquivo está na whitelist, não verificar e não bloqueia o arquivo, e não verificar o arquivo contra o blacklist ou greylist. Se o tipo de arquivo está na blacklist, não verificar o arquivo, mas bloqueá-lo de qualquer maneira, e não verificar o arquivo contra o greylist. Se o greylist está vazia ou se o greylist não está vazia e o tipo de arquivo é no greylist, verificar o arquivo como por normal e determinar se a bloqueá-lo com base nos resultados do verificando, mas se o greylist não está vazia e o tipo de arquivo não é no greylist, tratar o arquivo da mesma maneira como está na blacklist, portanto não verificá-lo, mas bloqueá-lo de qualquer maneira. Whitelist:';
$phpMussel['lang']['config_files_max_recursion'] = 'Máxima recursão profundidade limite por compactados arquivos. Padrão = 3.';
$phpMussel['lang']['config_files_max_uploads'] = 'O máximo permitido número de arquivos para analisar durante os arquivos carregamentos análise antes de abortar a análise e informando ao usuário eles estão carregando demais muito de uma vez! Oferece proteção contra um teórico ataque pelo qual um atacante tenta DDoS o seu sistema ou CMS por meio de sobrecarregando phpMussel a fim de retardar o PHP processo para uma parada. Recomendado: 10. Você pode querer aumentar ou diminuir esse número, dependendo das atributos do seu hardware. Note-se que este número não lev. Em conta ou incluir o conteúdos dos compactados arquivos.';
$phpMussel['lang']['config_general_FrontEndLog'] = 'Arquivo para registrar tentativas de login ao front-end. Especifique o nome de um arquivo, ou deixe em branco para desabilitar.';
$phpMussel['lang']['config_general_cleanup'] = 'Deletar script variáveis e cache após a execução? False = Não; True = Sim [Padrão]. Se você não estiver usar o script além da inicial verificação de carregamentos, deve definir a <code>true</code> (sim), para minimizar o uso de memória. Se você estiver usar o script por fins além da inicial verificação de carregamentos, deve definir a <code>false</code> (não), para evitar desnecessariamente duplicados dados recarregando em memória. Em prática geral, deve provavelmente ser definido como <code>true</code> (sim), mas, se você fizer isso, você não será capaz de usando o script por qualquer outra fim além analisando arquivos carregamentos. Não tem influência em CLI modo.';
$phpMussel['lang']['config_general_default_algo'] = 'Define qual algoritmo usar para todas as futuras senhas e sessões. Opções: PASSWORD_DEFAULT (padrão), PASSWORD_BCRYPT, PASSWORD_ARGON2I (requer PHP &gt;= 7.2.0).';
$phpMussel['lang']['config_general_delete_on_sight'] = 'Ativando esta opção irá instruir o script para tentar imediatamente deletando qualquer arquivo que ele encontra durante a análise que corresponde a qualquer critério de detecção, quer seja através de assinaturas ou de outra forma. Arquivos determinados para ser "limpo" não serão tocados. Em caso de compactados arquivos, o inteiro arquivo será deletado (independentemente de se o problemático arquivo é apenas um dos vários arquivos contidos dentro do compactado arquivo). Para o caso de arquivo carregamento análise, em geral, não é necessário ativar essa opção, porque normalmente, PHP irá automaticamente expurgar os conteúdos de o seu cache quando a execução foi concluída, significando que ele vai normalmente deletar todos os arquivos enviados através dele para o servidor a menos que tenha movido, copiado ou deletado já. A opção é adicionado aqui como uma medida de segurança para aqueles cujas cópias de PHP nem sempre se comportam da forma esperada. False = Após a análise, deixe o arquivo sozinho [Padrão]; True = Após a análise, se não limpo, deletar imediatamente.';
$phpMussel['lang']['config_general_disable_cli'] = 'Desativar o CLI modo? CLI modo é ativado por padrão, mas às vezes pode interferir com certas testes ferramentas (tal como PHPUnit, por exemplo) e outras aplicações baseadas em CLI. Se você não precisa desativar o CLI modo, você deve ignorar esta directiva. False = Ativar o CLI modo [Padrão]; True = Desativar o CLI modo.';
$phpMussel['lang']['config_general_disable_frontend'] = 'Desativar o acesso front-end? Acesso front-end pode fazer phpMussel mais manejável, mas também pode ser um risco de segurança potencial, também. É recomendado para gerenciar phpMussel através do back-end, sempre que possível, mas o acesso front-end é proporcionada para quando não é possível. Mantê-lo desativado, a menos que você precisar. False = Ativar o acesso front-end; True = Desativar o acesso front-end [Padrão].';
$phpMussel['lang']['config_general_disable_webfonts'] = 'Desativar webfonts? True = Sim [Padrão]; False = Não.';
$phpMussel['lang']['config_general_enable_plugins'] = 'Ativar o suporte para os plugins do phpMussel? False = Não; True = Sim [Padrão].';
$phpMussel['lang']['config_general_forbid_on_block'] = 'Deve phpMussel enviar 403 header com a bloqueado arquivo carregamento mensagem, ou ficar com os habituais 200 OK? False = Não (200); True = Sim (403) [Padrão].';
$phpMussel['lang']['config_general_honeypot_mode'] = 'Quando o honeypot modo é ativada, phpMussel vai tente colocar no quarentena todos os uploads de arquivos que ele encontras, independentemente de se ou não o arquivo que está sendo carregado corresponde a qualquer incluídos assinaturas, e zero análise desses tentados arquivos carregamentos vai ocorrer. Esta funcionalidade deve ser útil por aqueles que desejam utilizar phpMussel por os fins de vírus/malware pesquisa, mas não é recomendado para ativar essa funcionalidade se o planejado uso de phpMussel pelo utilizador é por o real análise dos arquivos carregamentos nem recomendado para usar essa funcionalidade por fins outros que o uso do honeypot. Por padrão, essa opção está desativada. False = Desativado [Padrão]; True = Ativado.';
$phpMussel['lang']['config_general_ipaddr'] = 'Onde encontrar o IP endereço das solicitações? (Útil por serviços como o Cloudflare e tal) Padrão = REMOTE_ADDR. ATENÇÃO: Não mude isso a menos que você saiba o que está fazendo!';
$phpMussel['lang']['config_general_lang'] = 'Especificar o padrão da linguagem por phpMussel.';
$phpMussel['lang']['config_general_log_rotation_action'] = 'A rotação de log limita o número de arquivos de log que devem existir a qualquer momento. Quando novos arquivos de log são criados, se o número total de arquivos de log exceder o limite especificado, a ação especificada será executada. Você pode especificar a ação desejada aqui. Delete = Deletar os arquivos de log mais antigos, até o limite não seja mais excedido. Archive = Primeiramente arquivar, e então deletar os arquivos de log mais antigos, até o limite não seja mais excedido.';
$phpMussel['lang']['config_general_log_rotation_limit'] = 'A rotação de log limita o número de arquivos de log que devem existir a qualquer momento. Quando novos arquivos de log são criados, se o número total de arquivos de log exceder o limite especificado, a ação especificada será executada. Você pode especificar o limite desejado aqui. Um valor de 0 desativará a rotação de log.';
$phpMussel['lang']['config_general_maintenance_mode'] = 'Ativar o modo de manutenção? True = Sim; False = Não [Padrão]. Desativa tudo além do front-end. Às vezes útil para quando atualiza seu CMS, frameworks, etc.';
$phpMussel['lang']['config_general_max_login_attempts'] = 'Número máximo de tentativas de login (front-end). Padrão = 5.';
$phpMussel['lang']['config_general_numbers'] = 'Como você prefere que os números sejam exibidos? Selecione o exemplo que parece mais correto para você.';
$phpMussel['lang']['config_general_quarantine_key'] = 'phpMussel é capaz de colocar em quarentena marcados tentados arquivos carregamentos em isolamento dentro da phpMussel vault, se isso é algo que você quer que ele faça. Casuais usuários de phpMussel de que simplesmente desejam proteger seus sites ou hospedagem sem ter qualquer interesse em profundamente analisando qualquer marcados tentados arquivos carregamentos deve deixar esta funcionalidade desativada, mas qualquer usuário interessado em mais profundamente analisando marcados tentados arquivos carregamentos para pesquisa de malware ou de similares tais coisas deve ativada essa funcionalidade. Quarentena de marcados tentados arquivos carregamentos às vezes pode também ajudar em depuração de falso-positivos, se isso é algo que ocorre com frequência para você. Por desativar a funcionalidade de quarentena, simplesmente deixar a directiva <code>quarantine_key</code> vazio, ou apagar o conteúdo do directivo, se ele não está já vazio. Por ativar a funcionalidade de quarentena, introduzir algum valor no directiva. O <code>quarantine_key</code> é um importante segurança característica do quarentena funcionalidade necessária como um meio de prevenir a funcionalidade de quarentena de ser explorada por potenciais atacantes e como meio de evitar qualquer potencial execução de dados armazenados dentro da quarentena. O <code>quarantine_key</code> devem ser tratados da mesma maneira como suas senhas: O mais longo o mais melhor, e guardá-lo com força. Por melhor efeito, usar em conjunto com <code>delete_on_sight</code>.';
$phpMussel['lang']['config_general_quarantine_max_files'] = 'O número máximo de arquivos que podem existir na quarentena. Quando novos arquivos são adicionados à quarentena, se esse número for excedido, os arquivos antigos serão excluídos até que o restante não exceda mais esse número. Padrão = 100.';
$phpMussel['lang']['config_general_quarantine_max_filesize'] = 'O máximo permitido tamanho do arquivos serem colocados em quarentena. Arquivos maiores que este valor NÃO serão colocados em quarentena. Esta directiva é importante como um meio de torná-lo mais difícil por qualquer potenciais atacante para inundar sua quarentena com indesejados dados potencialmente causando excesso uso de dados no seu hospedagem serviço. Padrão = 2MB.';
$phpMussel['lang']['config_general_quarantine_max_usage'] = 'O uso máximo de memória permitido através do quarentena. Se o total de memória utilizada pelo quarentena atingir este valor, os mais antigos arquivos em quarentena serão apagados até que a total memória utilizada já não atinge este valor. Esta directiva é importante como um meio de torná-lo mais difícil por qualquer potenciais atacante para inundar sua quarentena com indesejados dados potencialmente causando excesso uso de dados no seu hospedagem serviço. Padrão = 64MB.';
$phpMussel['lang']['config_general_scan_cache_expiry'] = 'Por quanto tempo deve phpMussel cache os resultados da verificação? O valor é o número de segundos para armazenar em cache os resultados da verificação para. O padrão é 21600 segundo (6 horas); Um valor de 0 irá desativar o cache os resultados da verificação.';
$phpMussel['lang']['config_general_scan_kills'] = 'Nome do arquivo para registrar todos os bloqueados ou matados carregamentos. Especifique um arquivo nome, ou deixe branco para desativar.';
$phpMussel['lang']['config_general_scan_log'] = 'Nome do arquivo para registrar todos os resultados do análises. Especifique um arquivo nome, ou deixe branco para desativar.';
$phpMussel['lang']['config_general_scan_log_serialized'] = 'Nome do arquivo para registrar todos os resultados do análises (formato é serializado). Especifique um arquivo nome, ou deixe branco para desativar.';
$phpMussel['lang']['config_general_statistics'] = 'Monitorar as estatísticas de uso do phpMussel? True = Sim; False = Não [Padrão].';
$phpMussel['lang']['config_general_timeFormat'] = 'O formato de notação de data/tempo utilizado pelo phpMussel. Opções adicionais podem ser adicionadas a pedido.';
$phpMussel['lang']['config_general_timeOffset'] = 'Deslocamento do fuso horário em minutos.';
$phpMussel['lang']['config_general_timezone'] = 'O seu fuso horário.';
$phpMussel['lang']['config_general_truncate'] = 'Truncar arquivos de log quando atingem um determinado tamanho? Valor é o tamanho máximo em B/KB/MB/GB/TB que um arquivo de log pode crescer antes de ser truncado. O valor padrão de 0KB desativa o truncamento (arquivos de log podem crescer indefinidamente). Nota: Aplica-se a arquivos de log individuais! O tamanho dos arquivos de log não é considerado coletivamente.';
$phpMussel['lang']['config_heuristic_threshold'] = 'Existem assinaturas específicas de phpMussel para identificando suspeitas e qualidades potencialmente maliciosos dos arquivos que estão sendo carregados sem por si só identificando aqueles arquivos que estão sendo carregados especificamente como sendo maliciosos. Este "threshold" (limiar) valor instrui phpMussel o que o total máximo peso de suspeitas e qualidades potencialmente maliciosos dos arquivos que estão sendo carregados que é permitida é antes que esses arquivos devem ser sinalizada como maliciosos. A definição de peso neste contexto é o número total de suspeitas e qualidades potencialmente maliciosos identificado. Por padrão, este valor será definido como 3. Um menor valor geralmente resultará em uma maior ocorrência de falsos positivos mas um maior número de arquivos maliciosos sendo sinalizado, enquanto um maior valor geralmente resultará em uma menor ocorrência de falsos positivos mas um menor número de arquivos maliciosos sendo sinalizado. É geralmente melhor a deixar esse valor em seu padrão a menos que você está enfrentando problemas relacionados a ela.';
$phpMussel['lang']['config_legal_privacy_policy'] = 'O endereço de uma política de privacidade relevante a ser exibida no rodapé de qualquer página gerada. Especifique um URL, ou deixe em branco para desabilitar.';
$phpMussel['lang']['config_legal_pseudonymise_ip_addresses'] = 'Pseudonimiza endereços IP ao escrever os arquivos de log? True = Sim; False = Não [Padrão].';
$phpMussel['lang']['config_signatures_Active'] = 'Uma lista dos arquivos de assinaturas ativos, delimitados por vírgulas.';
$phpMussel['lang']['config_signatures_detect_adware'] = 'Deve phpMussel usam assinaturas para detectar adware? False = Não; True = Sim [Padrão].';
$phpMussel['lang']['config_signatures_detect_deface'] = 'Deve phpMussel usam assinaturas para detectar vandalismo e vândalos? False = Não; True = Sim [Padrão].';
$phpMussel['lang']['config_signatures_detect_encryption'] = 'Deve phpMussel detectar e bloquear arquivos criptografados? False = Não; True = Sim [Padrão].';
$phpMussel['lang']['config_signatures_detect_joke_hoax'] = 'Deve phpMussel usam assinaturas para detectar piada/engano malwares/vírus? False = Não; True = Sim [Padrão].';
$phpMussel['lang']['config_signatures_detect_packer_packed'] = 'Deve phpMussel usam assinaturas para detectar embaladores e dados embaladas? False = Não; True = Sim [Padrão].';
$phpMussel['lang']['config_signatures_detect_pua_pup'] = 'Deve phpMussel usam assinaturas para detectar PUAs/PUPs? False = Não; True = Sim [Padrão].';
$phpMussel['lang']['config_signatures_detect_shell'] = 'Deve phpMussel usam assinaturas para detectar shell scripts? False = Não; True = Sim [Padrão].';
$phpMussel['lang']['config_signatures_fail_extensions_silently'] = 'Deve phpMussel reportar quando extensões não estão disponíveis? Se <code>fail_extensions_silently</code> está desativado, extensões indisponíveis serão reportado durante análise, e se <code>fail_extensions_silently</code> está ativado, extensões indisponíveis serão ignoradas, com a análise reportando por estes arquivos em que não há problemas. Desativando dessa directiva pode potencialmente aumentar a sua segurança, mas também pode levar a um aumento de falsos positivos. False = Desativado; True = Ativado [Padrão].';
$phpMussel['lang']['config_signatures_fail_silently'] = 'Deve phpMussel reportar quando os assinaturas arquivos estão perdido ou corrompido? Se <code>fail_silently</code> está desativado, perdidos e corrompidos arquivos serão reportado durante análise, e se <code>fail_silently</code> está ativado, perdidos e corrompidos arquivos serão ignoradas, com a análise reportando por estes arquivos em que não há problemas. Isso geralmente deve ser deixado sozinho a menos que você está experimentando PHP falhas ou semelhantes problemas. False = Desativado; True = Ativado [Padrão].';
$phpMussel['lang']['config_template_data_Magnification'] = 'Ampliação de fonte. Padrão = 1.';
$phpMussel['lang']['config_template_data_css_url'] = 'O template arquivo para temas personalizados utiliza CSS propriedades externos, enquanto que o template arquivo para o padrão tema utiliza CSS propriedades internos. Para instruir phpMussel para usar o template arquivo para temas personalizados, especificar o endereço HTTP pública do seu temas personalizados CSS arquivos usando a <code>css_url</code> variável. Se você deixar essa variável em branco, phpMussel usará o template arquivo para o padrão tema.';
$phpMussel['lang']['config_template_data_theme'] = 'Tema padrão a ser usado para phpMussel.';
$phpMussel['lang']['config_urlscanner_cache_time'] = 'Quanto tempo (em segundos) devem os resultados da API ser armazenados em cache? Padrão é 3600 segundos (1 hora).';
$phpMussel['lang']['config_urlscanner_google_api_key'] = 'Permite o uso do Google Safe Browsing API quando a API chave necessária está definida.';
$phpMussel['lang']['config_urlscanner_lookup_hphosts'] = 'Permite o uso do hpHosts API quando definido para true.';
$phpMussel['lang']['config_urlscanner_maximum_api_lookups'] = 'Número máximo admissível de API solicitações para executar por cada iteração de análise. Porque cada API solicitação adicional irá acrescentar ao tempo total necessário para completar cada iteração de análise, você pode querer estipular uma limitação a fim de acelerar o processo de análise. Quando definido para 0, nenhuma número máximo admissível será aplicada. Definido para 10 por padrão.';
$phpMussel['lang']['config_urlscanner_maximum_api_lookups_response'] = 'Que fazer se o número máximo admissível de API solicitações está ultrapassado? False = Fazer nada (continuar o processamento) [Padrão]; True = Marcar/bloquear o arquivo.';
$phpMussel['lang']['config_virustotal_vt_public_api_key'] = 'Opcionalmente, phpMussel é capaz de verificar os arquivos usando o Virus Total API como uma maneira de fornecer um nível de proteção muito maior contra vírus, trojans, malware e outras ameaças. Por padrão, verificação de arquivos usando o Virus Total API está desativado. Para ativá-lo, um Virus Total API chave é necessária. Devido ao benefício significativo que isso poderia fornecer a você, é algo que eu recomendo ativar. Esteja ciente, porém, que para usar o Virus Total API, você <em><strong>DEVE</strong></em> concordar com seus Termos de Uso e você <em><strong>DEVE</strong></em> aderir a todas as orientações conforme descrito pelo da Virus Total documentação! Você NÃO tem permissão para usar este recurso de integração EXCETO SE: Você leu e concorda com os Termos de Uso da Virus Total e sua API. Você leu e você compreender, no mínimo, o preâmbulo da Virus Total Pública API documentação (tudo depois "VirusTotal Public API v2.0" mas antes "Contents").';
$phpMussel['lang']['config_virustotal_vt_quota_rate'] = 'De acordo com o Virus Total API documentação, é limitada a, no máximo, 4 solicitações de qualquer natureza dentro qualquer 1 minuto período de tempo. Se você executar um honeyclient, honeypot ou qualquer outro automação que vai fornecer recursos para Virus Total e não só recuperar relatórios você tem direito a uma melhor solicitações cota. Por padrão, phpMussel vai aderir estritamente a estas limitações, mas, devido à possibilidade de essas cotas a ser aumentada, estas duas directivas são fornecidos como um meio para que você possa instruir phpMussel sobre o limite que deve aderir para. Excepto se tenha sido instruído a fazê-lo, não é recomendado para você aumentar esses valores, mas, se você encontrou problemas relacionados com a atingir sua cota, diminuir esses valores podem <em><strong>POR VEZES</strong></em> ajudá-lo em lidar com estes problemas. Seu taxa limite é determinada como <code>vt_quota_rate</code> solicitações de qualquer natureza dentro qualquer <code>vt_quota_time</code> minuto período de tempo.';
$phpMussel['lang']['config_virustotal_vt_quota_time'] = '(Ver descrição acima).';
$phpMussel['lang']['config_virustotal_vt_suspicion_level'] = 'Por padrão, phpMussel restringirá os arquivos que são verificado usando o Virus Total API a esses arquivos que considera "suspeito". Opcionalmente, você pode ajustar essa restrição via alterando o valor ao <code>vt_suspicion_level</code> directiva.';
$phpMussel['lang']['config_virustotal_vt_weighting'] = 'Deve phpMussel aplicar os resultados de analisando usando o Virus Total API como detecções ou como detecção ponderação? Esta directiva existe, porque, embora verificando um arquivo usando múltiplos mecanismos (como Virus Total faz) deve resultar em um aumento da taxa de detecção (e por conseguinte em um maior número de arquivos maliciosos detectados), isto também pode resultar em um aumento número de falsos positivos, e por conseguinte, em algumas circunstâncias, os resultados de análise pode ser melhor utilizado como uma pontuação de confiança e não como uma conclusão definitiva. Se um valor de 0 é usado, os resultados de análise usando o Virus Total API será aplicado como detecções, e por conseguinte, Se qualquer mecanismo usado pelo Virus Total marca o arquivo que está sendo analisado como sendo malicioso, phpMussel considerará o arquivo a ser malicioso. Se qualquer outro valor é usado, os resultados de análise usando o Virus Total API será aplicado como detecção ponderação, e por conseguinte, o número de mecanismos utilizados pela Virus Total que marcar o arquivo que está sendo analisado como sendo malicioso servirá como uma pontuação de confiança (ou ponderação de detecção) para se ou não o arquivo que está sendo analisado deve ser considerado malicioso por phpMussel (o valor utilizado representará o mínima pontuação de confiança ou peso requerido a fim de ser considerado malicioso). Um valor de 0 é usado por padrão.';
$phpMussel['lang']['confirm_action'] = 'Você tem certeza que quer "%s"?';
$phpMussel['lang']['field_2fa'] = 'Código 2FA';
$phpMussel['lang']['field_activate'] = 'Ativar';
$phpMussel['lang']['field_clear_all'] = 'Cancelar tudo';
$phpMussel['lang']['field_component'] = 'Componente';
$phpMussel['lang']['field_confirm'] = 'Confirme';
$phpMussel['lang']['field_create_new_account'] = 'Criar Nova Conta';
$phpMussel['lang']['field_deactivate'] = 'Desativar';
$phpMussel['lang']['field_delete_account'] = 'Deletar Conta';
$phpMussel['lang']['field_delete_all'] = 'Deletar tudo';
$phpMussel['lang']['field_delete_file'] = 'Deletar';
$phpMussel['lang']['field_download_file'] = 'Descarregar';
$phpMussel['lang']['field_edit_file'] = 'Editar';
$phpMussel['lang']['field_false'] = 'False (Falso)';
$phpMussel['lang']['field_file'] = 'Arquivo';
$phpMussel['lang']['field_filename'] = 'Nome do arquivo: ';
$phpMussel['lang']['field_filetype_directory'] = 'Diretório';
$phpMussel['lang']['field_filetype_info'] = '{EXT} Arquivo';
$phpMussel['lang']['field_filetype_unknown'] = 'Desconhecido';
$phpMussel['lang']['field_install'] = 'Instalar';
$phpMussel['lang']['field_latest_version'] = 'Última Versão';
$phpMussel['lang']['field_log_in'] = 'Entrar';
$phpMussel['lang']['field_more_fields'] = 'Mais Campos';
$phpMussel['lang']['field_new_name'] = 'Novo nome:';
$phpMussel['lang']['field_ok'] = 'OK';
$phpMussel['lang']['field_options'] = 'Opções';
$phpMussel['lang']['field_password'] = 'Senha';
$phpMussel['lang']['field_permissions'] = 'Permissões';
$phpMussel['lang']['field_quarantine_key'] = 'Chave de quarentena';
$phpMussel['lang']['field_rename_file'] = 'Renomear';
$phpMussel['lang']['field_reset'] = 'Reiniciar';
$phpMussel['lang']['field_restore_file'] = 'Restaurar';
$phpMussel['lang']['field_set_new_password'] = 'Definir Nova Senha';
$phpMussel['lang']['field_size'] = 'Tamanho Total: ';
$phpMussel['lang']['field_size_GB'] = 'GB';
$phpMussel['lang']['field_size_KB'] = 'KB';
$phpMussel['lang']['field_size_MB'] = 'MB';
$phpMussel['lang']['field_size_TB'] = 'TB';
$phpMussel['lang']['field_size_bytes'] = ['byte', 'bytes'];
$phpMussel['lang']['field_status'] = 'Estado';
$phpMussel['lang']['field_system_timezone'] = 'Usar o fuso horário padrão do sistema.';
$phpMussel['lang']['field_true'] = 'True (Verdadeiro)';
$phpMussel['lang']['field_uninstall'] = 'Desinstalar';
$phpMussel['lang']['field_update'] = 'Atualizar';
$phpMussel['lang']['field_update_all'] = 'Atualize tudo';
$phpMussel['lang']['field_upload_file'] = 'Carregar um novo ficheiro';
$phpMussel['lang']['field_username'] = 'Nome de Usuário';
$phpMussel['lang']['field_verify'] = 'Verifique isso';
$phpMussel['lang']['field_verify_all'] = 'Verifique tudo';
$phpMussel['lang']['field_your_version'] = 'Sua Versão';
$phpMussel['lang']['header_login'] = 'Por favor faça o login para continuar.';
$phpMussel['lang']['label_active_config_file'] = 'Arquivo de configuração ativo: ';
$phpMussel['lang']['label_actual'] = 'Atual';
$phpMussel['lang']['label_backup_location'] = 'Locais de backup de repositório (em caso de emergência, ou se tudo o mais falhar):';
$phpMussel['lang']['label_blocked'] = 'Uploads bloqueados';
$phpMussel['lang']['label_branch'] = 'Mais novo de estável de branch:';
$phpMussel['lang']['label_clientinfo'] = 'Informação ao cliente:';
$phpMussel['lang']['label_events'] = 'Eventos de análise';
$phpMussel['lang']['label_expected'] = 'Esperado';
$phpMussel['lang']['label_expires'] = 'Expirará: ';
$phpMussel['lang']['label_flagged'] = 'Objetos marcados';
$phpMussel['lang']['label_fmgr_cache_data'] = 'Dados de cache e arquivos temporários';
$phpMussel['lang']['label_fmgr_disk_usage'] = 'Uso do disco pelo phpMussel: ';
$phpMussel['lang']['label_fmgr_free_space'] = 'Espaço livre no disco: ';
$phpMussel['lang']['label_fmgr_total_disk_usage'] = 'Uso total do disco: ';
$phpMussel['lang']['label_fmgr_total_space'] = 'Espaço total no disco: ';
$phpMussel['lang']['label_fmgr_updates_metadata'] = 'Metadados para atualização de componentes';
$phpMussel['lang']['label_hide'] = 'Ocultar';
$phpMussel['lang']['label_hide_hash_table'] = 'Ocultar tabela de hash';
$phpMussel['lang']['label_never'] = 'Nunca';
$phpMussel['lang']['label_os'] = 'Sistema operacional usada:';
$phpMussel['lang']['label_other'] = 'Outros';
$phpMussel['lang']['label_other-Active'] = 'Arquivos de assinaturas ativos';
$phpMussel['lang']['label_other-Since'] = 'Data de início';
$phpMussel['lang']['label_php'] = 'Versão do PHP usada:';
$phpMussel['lang']['label_phpmussel'] = 'Versão do phpMussel usada:';
$phpMussel['lang']['label_quarantined'] = 'Uploads em quarentena';
$phpMussel['lang']['label_sapi'] = 'SAPI usada:';
$phpMussel['lang']['label_scanned_objects'] = 'Objetos analisados';
$phpMussel['lang']['label_scanned_uploads'] = 'Uploads analisados';
$phpMussel['lang']['label_show'] = 'Mostrar';
$phpMussel['lang']['label_show_hash_table'] = 'Mostrar tabela de hash';
$phpMussel['lang']['label_size_in_quarantine'] = 'Tamanho em quarentena: ';
$phpMussel['lang']['label_stable'] = 'Mais novo de estável:';
$phpMussel['lang']['label_sysinfo'] = 'Informação do sistema:';
$phpMussel['lang']['label_tests'] = 'Testes:';
$phpMussel['lang']['label_unstable'] = 'Mais novo de instável:';
$phpMussel['lang']['label_upload_date'] = 'Data do carregamento: ';
$phpMussel['lang']['label_upload_hash'] = 'Hash do carregamento: ';
$phpMussel['lang']['label_upload_origin'] = 'Origem do carregamento: ';
$phpMussel['lang']['label_upload_size'] = 'Tamanho do carregamento: ';
$phpMussel['lang']['label_your_ip'] = 'Seu IP:';
$phpMussel['lang']['label_your_ua'] = 'Seu UA:';
$phpMussel['lang']['link_accounts'] = 'Contas';
$phpMussel['lang']['link_cache_data'] = 'Dados de Cache';
$phpMussel['lang']['link_config'] = 'Configuração';
$phpMussel['lang']['link_documentation'] = 'Documentação';
$phpMussel['lang']['link_file_manager'] = 'Gerenciador de Arquivos';
$phpMussel['lang']['link_home'] = 'Página Principal';
$phpMussel['lang']['link_logs'] = 'Arquivos de Registro';
$phpMussel['lang']['link_quarantine'] = 'Quarentena';
$phpMussel['lang']['link_siginfo'] = 'Informações de Assinaturas';
$phpMussel['lang']['link_statistics'] = 'Estatisticas';
$phpMussel['lang']['link_textmode'] = 'Formatação de texto: <a href="%1$sfalse">Simples</a> – <a href="%1$strue">Chique</a>';
$phpMussel['lang']['link_updates'] = 'Atualizações';
$phpMussel['lang']['link_upload_test'] = 'Carregar Teste';
$phpMussel['lang']['logs_logfile_doesnt_exist'] = 'Arquivo de registro selecionado não existe!';
$phpMussel['lang']['logs_no_logfile_selected'] = 'Não qualquer arquivo de registro selecionado.';
$phpMussel['lang']['logs_no_logfiles_available'] = 'Não quaisquer arquivos de registro disponíveis.';
$phpMussel['lang']['max_login_attempts_exceeded'] = 'Número máximo de tentativas de login foi excedido; Acesso negado.';
$phpMussel['lang']['previewer_days'] = 'Dias';
$phpMussel['lang']['previewer_hours'] = 'Horas';
$phpMussel['lang']['previewer_minutes'] = 'Minutos';
$phpMussel['lang']['previewer_months'] = 'Meses';
$phpMussel['lang']['previewer_seconds'] = 'Segundos';
$phpMussel['lang']['previewer_weeks'] = 'Semanas';
$phpMussel['lang']['previewer_years'] = 'Anos';
$phpMussel['lang']['response_2fa_invalid'] = 'Código 2FA incorreto inserido. Autenticação falhou.';
$phpMussel['lang']['response_2fa_valid'] = 'Autenticado com sucesso.';
$phpMussel['lang']['response_accounts_already_exists'] = 'Uma conta com esse nome já existe!';
$phpMussel['lang']['response_accounts_created'] = 'Conta criada com sucesso!';
$phpMussel['lang']['response_accounts_deleted'] = 'Conta deletada com sucesso!';
$phpMussel['lang']['response_accounts_doesnt_exist'] = 'Essa conta não existe.';
$phpMussel['lang']['response_accounts_password_updated'] = 'Senha atualizada com sucesso!';
$phpMussel['lang']['response_activated'] = 'Ativado com sucesso.';
$phpMussel['lang']['response_activation_failed'] = 'Falha ao ativar!';
$phpMussel['lang']['response_checksum_error'] = 'Erro de checksum! Arquivo rejeitado!';
$phpMussel['lang']['response_component_successfully_installed'] = 'Componente instalado com sucesso.';
$phpMussel['lang']['response_component_successfully_uninstalled'] = 'Componente desinstalado com sucesso.';
$phpMussel['lang']['response_component_successfully_updated'] = 'Componente atualizado com sucesso.';
$phpMussel['lang']['response_component_uninstall_error'] = 'Ocorreu um erro ao tentar desinstalar o componente.';
$phpMussel['lang']['response_configuration_updated'] = 'Configuração atualizada com sucesso.';
$phpMussel['lang']['response_deactivated'] = 'Desativado com sucesso.';
$phpMussel['lang']['response_deactivation_failed'] = 'Falha ao desativar!';
$phpMussel['lang']['response_delete_error'] = 'Falha ao deletar!';
$phpMussel['lang']['response_directory_deleted'] = 'Diretório deletado com sucesso!';
$phpMussel['lang']['response_directory_renamed'] = 'Diretório renomeado com sucesso!';
$phpMussel['lang']['response_error'] = 'Erro';
$phpMussel['lang']['response_failed_to_install'] = 'Instalação falhada!';
$phpMussel['lang']['response_failed_to_update'] = 'Atualização falhada!';
$phpMussel['lang']['response_file_deleted'] = 'Arquivo deletado com sucesso!';
$phpMussel['lang']['response_file_edited'] = 'Arquivo modificado com sucesso!';
$phpMussel['lang']['response_file_renamed'] = 'Arquivo renomeado com sucesso!';
$phpMussel['lang']['response_file_restored'] = 'Arquivo restaurado com sucesso!';
$phpMussel['lang']['response_file_uploaded'] = 'Arquivo carregado com sucesso!';
$phpMussel['lang']['response_login_invalid_password'] = 'Falha no login! Senha inválida!';
$phpMussel['lang']['response_login_invalid_username'] = 'Falha no login! Esse usuário não existe!';
$phpMussel['lang']['response_login_password_field_empty'] = 'Entrada de senha vazio!';
$phpMussel['lang']['response_login_username_field_empty'] = 'Entrada de nome de usuário vazio!';
$phpMussel['lang']['response_login_wrong_endpoint'] = 'Ponto final errado!';
$phpMussel['lang']['response_possible_problem_found'] = 'Possível problema encontrado.';
$phpMussel['lang']['response_rename_error'] = 'Falha ao renomear!';
$phpMussel['lang']['response_restore_error_1'] = 'Falha ao restaurar! Arquivo corrompido!';
$phpMussel['lang']['response_restore_error_2'] = 'Falha ao restaurar! Chave de quarentena incorreta!';
$phpMussel['lang']['response_sanity_1'] = 'Arquivo contém conteúdo inesperado! Arquivo rejeitado!';
$phpMussel['lang']['response_statistics_cleared'] = 'Estatísticas apagadas.';
$phpMussel['lang']['response_updates_already_up_to_date'] = 'Já atualizado.';
$phpMussel['lang']['response_updates_not_installed'] = 'Componente não instalado!';
$phpMussel['lang']['response_updates_not_installed_php'] = 'Componente não instalado (requer PHP &gt;= {V})!';
$phpMussel['lang']['response_updates_outdated'] = 'Desatualizado!';
$phpMussel['lang']['response_updates_outdated_manually'] = 'Desatualizado (por favor atualize manualmente)!';
$phpMussel['lang']['response_updates_outdated_php_version'] = 'Desatualizado (requer PHP &gt;= {V})!';
$phpMussel['lang']['response_updates_unable_to_determine'] = 'Não foi possível determinar.';
$phpMussel['lang']['response_upload_error'] = 'Falha ao carregar!';
$phpMussel['lang']['response_verification_failed'] = 'Verificação falhada! Componente pode estar corrompido.';
$phpMussel['lang']['response_verification_success'] = 'Verificação sucesso! Não foram encontrados problemas.';
$phpMussel['lang']['security_warning'] = 'Ocorreu um problema inesperado ao processar sua solicitação. Por favor, tente novamente. Se os problemas persistirem, entre em contato com o suporte.';
$phpMussel['lang']['siginfo_key_CVE'] = 'Assinaturas que tratam de CVEs (Vulnerabilidades e Exposições Comuns).';
$phpMussel['lang']['siginfo_key_Chameleon'] = 'Assinaturas que tratam de "ataques de camaleão".';
$phpMussel['lang']['siginfo_key_FN'] = 'Assinaturas que trabalham com os nomes de arquivos (em oposição ao conteúdo dos arquivos).';
$phpMussel['lang']['siginfo_key_Fake'] = 'Detecções são falsas, variantes maliciosas de entidades benignas (softwares, scripts, etc).';
$phpMussel['lang']['siginfo_key_HEUR'] = 'Assinaturas derivadas de dados heurísticos.';
$phpMussel['lang']['siginfo_key_META'] = 'Assinaturas que trabalham com metadados de arquivos (em oposição aos dados dos arquivos).';
$phpMussel['lang']['siginfo_key_Other'] = 'Não identificado ou outro.';
$phpMussel['lang']['siginfo_key_Other_Metadata'] = 'Nenhum metadado disponível.';
$phpMussel['lang']['siginfo_key_Suspect'] = 'Detecções são suspeitas, mas não confirmadas (podem envolver combinações de vários identificadores).';
$phpMussel['lang']['siginfo_key_Testfile'] = 'Assinaturas para arquivos de teste (ou seja, não detecções maliciosas).';
$phpMussel['lang']['siginfo_key_Total'] = 'Total de assinaturas ativas.';
$phpMussel['lang']['siginfo_key_VT'] = 'Assinaturas incluindo ou baseadas em dados do Virus Total.';
$phpMussel['lang']['siginfo_key_Werewolf'] = 'Assinaturas que tratam de "ataques de lobisomens".';
$phpMussel['lang']['siginfo_sub_Classes'] = 'Contar por classe de arquivo de assinatura';
$phpMussel['lang']['siginfo_sub_Files'] = 'Contar por arquivo de assinatura';
$phpMussel['lang']['siginfo_sub_MalwareTypes'] = 'Contar por infecção ou tipo de malware';
$phpMussel['lang']['siginfo_sub_SigTypes'] = 'Contar por metadados de assinatura';
$phpMussel['lang']['siginfo_sub_Targets'] = 'Contar por vetor alvejados';
$phpMussel['lang']['siginfo_sub_Vendors'] = 'Contar por o fornecedor ou fonte de assinatura';
$phpMussel['lang']['siginfo_xkey'] = 'Identificado como "%s".';
$phpMussel['lang']['state_async_deny'] = 'Permissões não adequadas para executar solicitações assíncronas. Tente fazer o login novamente.';
$phpMussel['lang']['state_cache_is_empty'] = 'O cache está vazio.';
$phpMussel['lang']['state_complete_access'] = 'Acesso completo';
$phpMussel['lang']['state_component_is_active'] = 'Componente está ativo.';
$phpMussel['lang']['state_component_is_inactive'] = 'Componente está inativo.';
$phpMussel['lang']['state_component_is_provisional'] = 'Componente está provisório.';
$phpMussel['lang']['state_default_password'] = 'Atenção: Usando senha padrão!';
$phpMussel['lang']['state_email_sent'] = 'E-mail enviado com sucesso para "%s".';
$phpMussel['lang']['state_failed_missing'] = 'A tarefa falhou porque um componente necessário está indisponível.';
$phpMussel['lang']['state_loading'] = 'Carregando...';
$phpMussel['lang']['state_loadtime'] = 'Pedido de página concluído em <span class="txtRd">%s</span> segundos.';
$phpMussel['lang']['state_logged_in'] = 'Conectado.';
$phpMussel['lang']['state_logged_in_2fa_pending'] = 'Conectado + 2FA pendentes.';
$phpMussel['lang']['state_logged_out'] = 'Desconectado.';
$phpMussel['lang']['state_logs_access_only'] = 'Acesso aos arquivos de registro somente';
$phpMussel['lang']['state_maintenance_mode'] = 'Atenção: O modo de manutenção está ativado!';
$phpMussel['lang']['state_password_not_valid'] = 'Atenção: Esta conta não está usando uma senha válida!';
$phpMussel['lang']['state_quarantine'] = ['Atualmente existe %s arquivo em quarentena.', 'Atualmente existem %s arquivos em quarentena.'];
$phpMussel['lang']['switch-hide-non-outdated-set-false'] = 'Não ocultar não desatualizado';
$phpMussel['lang']['switch-hide-non-outdated-set-true'] = 'Ocultar não desatualizado';
$phpMussel['lang']['switch-hide-unused-set-false'] = 'Não ocultar não utilizado';
$phpMussel['lang']['switch-hide-unused-set-true'] = 'Ocultar não utilizado';
$phpMussel['lang']['tip_2fa_sent'] = 'Um e-mail contendo um código de autenticação de dois fatores foi enviado para o seu endereço de e-mail. Por favor, confirme este código abaixo para obter acesso ao front-end. Se você não recebeu este e-mail, tente fazer logout, aguarde 10 minutos, e faça login novamente para receber um novo e-mail contendo um novo código.';
$phpMussel['lang']['tip_accounts'] = 'Olá, {username}.<br />A página de contas permite que você controle quem pode acessar o phpMussel front-end.';
$phpMussel['lang']['tip_cache_data'] = 'Olá, {username}.<br />Aqui você pode rever o conteúdo do cache.';
$phpMussel['lang']['tip_config'] = 'Olá, {username}.<br />A página de configuração permite que você modifique a configuração do phpMussel a partir do front-end.';
$phpMussel['lang']['tip_donate'] = 'phpMussel é oferecido gratuitamente, mas se você quiser doar para o projeto, você pode fazê-lo clicando no botão doar.';
$phpMussel['lang']['tip_fe_cookie_warning'] = 'Nota: phpMussel usa um cookie para autenticar logins. Ao efetuar o login, você dá seu consentimento para que um cookie seja criado e armazenado pelo seu navegador.';
$phpMussel['lang']['tip_file_manager'] = 'Olá, {username}.<br />O gerenciador de arquivos permite deletar, editar, carregar e descarregar arquivos. Use com cuidado (você poderia quebrar sua instalação com este).';
$phpMussel['lang']['tip_home'] = 'Olá, {username}.<br />Esta é a página principal do phpMussel front-end. Selecione um link no menu de navegação à esquerda para continuar.';
$phpMussel['lang']['tip_login'] = 'Nome de usuário padrão: <span class="txtRd">admin</span> – Senha padrão: <span class="txtRd">password</span>';
$phpMussel['lang']['tip_logs'] = 'Olá, {username}.<br />Selecionar um arquivo de registro da lista abaixo para visualizar o conteúdo do arquivo de registro.';
$phpMussel['lang']['tip_quarantine'] = 'Olá, {username}.<br />Esta página lista todos os arquivos atualmente em quarentena e facilita o gerenciamento desses arquivos.';
$phpMussel['lang']['tip_quarantine_disabled'] = 'Nota: A quarentena está atualmente desativada, mas pode ser ativada através da página de configuração.';
$phpMussel['lang']['tip_see_the_documentation'] = 'Consulte a <a href="https://github.com/phpMussel/phpMussel/blob/master/_docs/readme.pt.md#SECTION7">documentação</a> para obter informações sobre as várias diretrizes de configuração e seus objetivos.';
$phpMussel['lang']['tip_siginfo'] = 'Olá, {username}.<br />A página de informações de assinaturas fornece algumas informações básicas sobre as origens e os tipos das assinaturas atualmente ativas.';
$phpMussel['lang']['tip_statistics'] = 'Olá, {username}.<br />Esta página mostra algumas estatísticas de uso básicas relativas à instalação do phpMussel.';
$phpMussel['lang']['tip_statistics_disabled'] = 'Nota: O monitoramento de estatísticas está desativado atualmente, mas pode ser ativado através da página de configuração.';
$phpMussel['lang']['tip_updates'] = 'Olá, {username}.<br />A página de atualizações permite que você instale, desinstale, e atualize os vários componentes do phpMussel (o pacote principal, assinaturas, plugins, arquivos de L10N, etc).';
$phpMussel['lang']['tip_upload_test'] = 'Olá, {username}.<br />A página de carregar teste contém um formulário padrão para carregando arquivos, permitindo que você teste se um arquivo seria normalmente bloqueado através phpMussel quando carregando.';
$phpMussel['lang']['title_login'] = 'Login';
$phpMussel['lang']['warning'] = 'Atenção:';
$phpMussel['lang']['warning_php_1'] = 'O sua versão PHP não está mais ativamente apoiada! Atualizando é recomendado!';
$phpMussel['lang']['warning_php_2'] = 'O sua versão PHP é severamente vulnerável! Atualizando é fortemente recomendado!';
$phpMussel['lang']['warning_signatures_1'] = 'Nenhum arquivo de assinaturas está ativo!';

$phpMussel['lang']['info_some_useful_links'] = 'Alguns links úteis:<ul>
      <li><a href="https://github.com/phpMussel/phpMussel/issues">Questões do phpMussel @ GitHub</a> – Página de problemas para phpMussel (apoio, assistência, etc).</li>
      <li><a href="https://www.clamav.net/">ClamavNet</a> – Página principal para ClamAV (ClamAV® ClamAV é um mecanismo de antivírus de código aberto para detectar trojans, vírus, malware e outras ameaças maliciosas).</li>
      <li><a href="https://www.securiteinfo.com/">SecuriteInfo.com</a> – Empresa de segurança informática que oferece assinaturas complementares para o ClamAV.</li>
      <li><a href="https://www.phishtank.com/">PhishTank</a> – Base de dados de phishing utilizada pelo phpMussel URL scanner.</li>
      <li><a href="https://www.facebook.com/groups/2204685680/">Global PHP Group @ Facebook</a> – PHP recursos de aprendizagem e discussão.</li>
      <li><a href="https://php.earth/">PHP.earth</a> – PHP recursos de aprendizagem e discussão.</li>
      <li><a href="https://www.virustotal.com/">VirusTotal</a> – VirusTotal é um serviço gratuito para analisar arquivos e URLs suspeitos.</li>
      <li><a href="https://www.hybrid-analysis.com/">Hybrid Analysis</a> – Hybrid Analysis é um serviço gratuito para análise de malware fornecido pela <a href="https://www.payload-security.com/">Payload Security</a>.</li>
      <li><a href="https://www.malwarebytes.com/">Malwarebytes</a> – Especialistas em malware de computador.</li>
      <li><a href="https://malwaretips.com/">MalwareTips</a> – Fórum de discussão focado em malware útil.</li>
      <li><a href="https://maikuolan.github.io/Vulnerability-Charts/">Mapas de Vulnerabilidade</a> – Lista as versões seguras/inseguras de vários pacotes (PHP, HHVM, etc).</li>
      <li><a href="https://maikuolan.github.io/Compatibility-Charts/">Mapas de Compatibilidade</a> – Lista informações de compatibilidade para vários pacotes (CIDRAM, phpMussel, etc).</li>
    </ul>';

$phpMussel['lang']['msg_template_2fa'] = '<center><p>Olá, %1$s.<br />
<br />
Seu código de autenticação de dois fatores para efetuar login no front-end phpMussel:</p>
<h1>%2$s</h1>
<p>Este código expira em 10 minutos.</p></center>';
$phpMussel['lang']['msg_subject_2fa'] = 'Autenticação de dois fatores';
