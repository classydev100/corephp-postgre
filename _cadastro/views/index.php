<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cielo</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="icon" href="../../_cadastro/assets/favicon.ico" />
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<link rel="stylesheet" href="../../_cadastro/assets/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../../_cadastro/assets/css/style_index.css">
		
		
		<!-- <script src="assets/js/jquery-3.3.1.min.js"></script> -->

		<style type="text/css">
			::placeholder {
			  color: grey !important;
			  font-size: 15px;
			  text-transform: capitalize !important;
			}
		</style>
	
	</head>
	<body>

		<div>
			<div class="ci-mc-header">
				<div class="row mx-0">
					<div class="container">
						<div class="row">
							<div class="col-sm-6">
								<img src="../../_cadastro/assets/img/logo-cielo-negativo.svg" class="logo-img"/ >
							</div>
							<div class="col-sm-6">
<!--                                <a href="/dashboard"><button type="button" class="btn btn-success dashbord-btn">Dashboard</button></a>-->
                            </div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mx-0 px-0">
				<div class="col-md-6 mx-auto px-0 header-subject">
					<p class="header-title pt-5 mb-0 px-3">Crie sua conta</p>
					<p class="subheader-title px-3">Informe abaixo os dados do banco no qual recebe suas vendas</p>
				</div>
			</div>
            <form>
				<div class="row mx-0 px-3" >
					<div class="col-md-6 bg-white p-4 mx-auto border-radius-12" id="wizard1" >
						<!-- SECTION 1 -->
						<h4></h4>

						<section>
							<div class="form-header">
								<div class="col-md-5 py-2 form-group">
									<div class="form-holder">
										<label>*Nome completo</label>
										<input id="fullnameinput" type="text" name="fullname" placeholder="digit seu nome completo" maxlength="60" class="fullname form-control" >
										<div id="fullnamevalidation">
										    
										</div>
											
									</div>
									<div class="form-holder">
										<label>*CPF</label>
										<input id="cpfinput" type="text" name="cpf"  class="cpf form-control" placeholder="digite seu CPF">

										<div id="cpfvalidation">
										    
										</div>
									</div>
									<div class="form-holder">
										<label>*Telephone</label>
<!--										<input id="telephoneinput" type="number" name="telephone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="12"  placeholder="digite seu telefone"  class="telephone form-control">-->
										<input id="telephoneinput" type="text" name="telephone"  placeholder="digite seu telefone"  class="telephone form-control">
										<div id="telephonevalidation">
										    
										</div>
									</div>
									<div class="form-holder">
										<label>*Email</label>
										<input id="emailinput" type="text" name="email" placeholder="digite seu email address" maxlength="45" class="email form-control">
										<div id="emailvalidation">
										    
										</div>
									</div>
									<!-- <input type="checkbox" onclick="checkeds()"/>&nbsp;<span class="check_red">I agree to terms and conditions</span> -->
								</div>
								<div class="col-md-7 ml-auto pt-3 form-group decas_gerais">
									<p class="left-title" >Dicas gerais</p>
									• A partir de agora o CPF e o e-mail serão utilizados para acessar a sua conta<br>
									• O E-mail e CPF são obrigatórios e só poderão ser cadastrados uma única vez
								</div>
							</div>
						</section>
						
						<!-- SECTION 2 -->
						<h4></h4>
						<section>
							<div class="form-header">
								<div class="col-md-5 py-2 form-group">
									<div class="form-holder">
										<label>*Tipos e categorias de compra</label>
										<input id="puchaseinput" type="text" name="purchase_type" placeholder="digite seus tipos de compra e categoria"  maxlength="45"  class="purchase_type form-control">
										<div id="puchasevalidation">
										    
										</div>
									</div>
									<div class="form-holder">
										<label>*número solicitado</label>
										<input id="requestnumberinput" type="number" name="request_number"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" placeholder="digite o seu número de solicitação"  maxlength="16"  class="request_number form-control">
										<div id="requestnumbervalidation">
										    
										</div>
									</div>
									<div class="form-holder">
										<label>*Mês e ano da compra</label>
										<input id="monthinput" type="text" name="month_year_purchase" class="month_year_purchase form-control" placeholder="digite seu mês e ano de compra">
										<div id="monthvalidation">
										    
										</div>
									</div>
									<div class="form-holder">
										<label>*Número da sorte</label>
										<input id="luckinput" type="number" name="luck_number"  oninput="javascript: if (this.value.length > this.maxLength ) this.value = this.value.slice(0, this.maxLength);"maxlength="4" class="luck_number form-control" placeholder="digite o seu número da sorte">
										<div id="luckvalidation">
										    
										</div>
									</div>
									<!-- <input type="checkbox" onclick="checkeds()"/>&nbsp;<span class="check_red">I agree to terms and conditions</span> -->
								</div>
								<div class="col-md-7 ml-auto pt-3  form-group decas_gerais">
									<p class="left-title" >Dicas gerais</p>
									• A partir de agora o CPF e o e-mail serão utilizados para acessar a sua conta<br>
									• O E-mail e CPF são obrigatórios e só poderão ser cadastrados uma única vez
								</div>
							</div>
						</section>

						<!-- SECTION 3 -->
						<h4></h4>
						<section style="margin-top:15%">							
							<div class="form-header text-center;" style="display: flex; justify-content: center; align-items: center; text-align: center;">
								<p class="heder-title" id="demo">Congratulations, you are now participating in the promotion!</p>
							</div>
							
						</section>
					</div>
				</div>
				<p class="text-center pt-3 mb-0 pb-3 px-3">Copyright 2020 Cielo. Todos os direitos reservados.</p>
            </form>
		</div>
		<script src="../../_cadastro/assets/js/jquery-1.9.0.min.js" type="text/javascript"></script>

		<script src="../../_cadastro/assets/js/jquery.steps.js"></script>

		<script src="../../_cadastro/assets/js/main.js"></script>
		<script src="../../_cadastro/assets/js/maskcustom.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="https://unpkg.com/imask"></script>
        <script src="../../_cadastro/assets/js/vanilla-masker.js"></script>
        <script>
            $(document).ready(function() {

                // IMask(document.getElementById('cpfinput'), {
                //     mask: '000.000.000-00'
                // });
                //
                // IMask(document.getElementById('monthinput'), {
                //     mask: '00/0000'
                // });
                // var telephoneinput = document.getElementById('telephoneinput');
                // var dispatchMask = IMask(telephoneinput, {
                //         mask: [
                //             {
                //                 mask: '(000)000000000',
                //                 startsWith: '0',
                //             },
                //             {
                //                 mask: '(00)0000000000',
                //                 startsWith: '1',
                //             },
                //             {
                //                 mask: '(00)0000000000',
                //                 startsWith: '2',
                //             },
                //             {
                //                 mask: '(00)0000000000',
                //                 startsWith: '3',
                //             },
                //             {
                //                 mask: '(00)0000000000',
                //                 startsWith: '4',
                //             },
                //             {
                //                 mask: '(00)0000000000',
                //                 startsWith: '5',
                //             },
                //             {
                //                 mask: '(00)0000000000',
                //                 startsWith: '6',
                //             },
                //             {
                //                 mask: '(00)0000000000',
                //                 startsWith: '7',
                //             },
                //             {
                //                 mask: '(00)0000000000',
                //                 startsWith: '8',
                //             },
                //             {
                //                 mask: '(00)0000000000',
                //                 startsWith: '9',
                //             },
                //         ],
                //         dispatch: function (appended, dynamicMasked) {
                //             var number = (dynamicMasked.value + appended).replace(/\D/g,'');
                //
                //             return dynamicMasked.compiledMasks.find(function (m) {
                //                 return number.indexOf(m.startsWith) === 0;
                //             });
                //         }
                //     }
                // )

                // VMasker(document.getElementById('cpfinput')).maskPattern("999.999.999-99");
                // VMasker(document.getElementById('monthinput')).maskPattern("99/9999");

                document.getElementById('cpfinput').addEventListener('input',function () {
                    var c = event.target;
                    VMasker(c).maskPattern("999.999.999-99");
                }, false);

                document.getElementById('monthinput').addEventListener('input',function () {
                    var c = event.target;
                    VMasker(c).maskPattern("99/9999");
                }, false);

                function inputHandlerTel(masks, max, event) {
                    var c = event.target;
                    console.log(c.value)
                    var v = c.value.replace(/\D/g, '');
                    // var m = c.value.length > max ? 1 : 0;
                    var m = c.value.charAt(1) == 0 ? 1 : 0;
                    VMasker(c).unMask();
                    VMasker(c).maskPattern(masks[m]);
                    c.value = VMasker.toPattern(v, masks[m]);
                }

                var telMask = ['(99)9999999999', '(999)999999999'];
                var tel = document.querySelector('#telephoneinput');
                VMasker(tel).maskPattern(telMask[0]);
                tel.addEventListener('input', inputHandlerTel.bind(undefined, telMask, 14), false);

            })

        </script>
<!-- Template created and distributed by Colorlib -->
</body>
</html>