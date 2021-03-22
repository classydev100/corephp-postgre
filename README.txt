DIRETORIO "CADASTRO"

1 PAGINA

index.php, 3 ETAPAS (2 ETAPAS COM VALIDAÇÃO DE CAMPOS, 1 SEM VALIDAÇÃO DE CAMPOS)

A validação e mascara de campos sera obrigatorio utilizar JQuery, o armazenamento sera obrigatorio utilizar PostgreSQL

*Full Name
If the length is equal to "0" = Required
if the length is less than "6" = Full name is invalid!
Maximum size (length) of characters allowed in the field is "60"

*CPF
If the length is equal to "0" = Required
if the length is less than "11" = CPF in invalid!
Maximum size (length) of numeric characters allowed in the field is "11"

*Telephone
If the length is equal to "0" = Required
If the length is less than "10" = Telephone is invalid!
Maximum size (length) of numeric characters allowed in the field is "12"

*Email
If the length is equal to "0" = Required
If the length is less than "5" = Invaid email!
If there is nothing character before "@" = Invaid email!
If there is nothing character "." after any position of the "@" and another character after the "." = Invaid email!
Maximum size (length) of characters allowed in the field is "45"

*Purchase Types and Category
If the length is equal to "0" = Required
If the length is less than "6" = Purchase Types and Category is invalid!
Maximum size (length) of characters allowed in the field is "45"

*Request Number
If the length is equal to "0" = Required
If the length is less than "16" = Request number is invalid!
if the first character of the field does not start with number "4, 5, 3 or 6" = Request number is invalid
Maximum size (length) of numeric characters allowed in the field is "16"

*Month and year of purchase
If the length is equal to "0" = Required
If the length is less than "6" = Month and year of purchase is invalid!
Maximum size (length) of numeric characters allowed in the field is "6"

*Lucky number
If blank | "if the length is equal to "0" (blank) it is" = Required
If invalid | if the length is less than "3" = Lucky number is invalid!
Maximum size (length) of numeric characters allowed in the field is "4"

----------------------------------------------------------------------------------------------------------------------------------------
DIRETORIO "DASHBOARD" 

4 PAGINAS

index.php, é a pagina de usuário onde sera validado o login e senha
admin.php, é pagina onde exibe o total geral de visitantes e total geral de cadastros
contador.php, é pagina onde exibe o total detalhado de visitantes da pagina
cadastros.php, é a pagina onde exibe o total detalhado de cadastros da pagina

----------------------------------------------------------------------------------------------------------------------------------------
Pagina: index.php (Title Page: Login)

CAMPO DE USUARIO:
CAMPO DE SENHA:

BOTÃO LOGIN
----------------------------------------------------------------------------------------------------------------------------------------
Pagina: admin.php (Title Page: Dashboard)

BOTÂO DE LOGOUT

TOTAL DE VISITAS:
TOTAL DE CADASTROS:
----------------------------------------------------------------------------------------------------------------------------------------
Pagina: contador.php (Title Page: Visitantes)

BOTÃO DE VOLTAR
BOTÂO DE LOGOUT

TOTAL DE VISITAS:

ID, Data e Horario, IP, UserAgent
----------------------------------------------------------------------------------------------------------------------------------------
Pagina: cadastros.php (Title Page: Cadastros)

BOTÃO DE VOLTAR
BOTÂO DE LOGOUT

TOTAL DE CADASTROS:

ID, Data e Horario, Nome Completo, CPF, Telefone, Email, Tipo de Compra e Categoria, Número de requisição, Data e Ano, Número da sorte
----------------------------------------------------------------------------------------------------------------------------------------
