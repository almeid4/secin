<div class="row view-area-do-particpante">

    <div class="box box-success" style="border: 1px solid #ccc;margin-bottom: 0px;">

        <div class="box-body box-profile">

            <div class="col-md-3"style="padding-right: 5px;">

                <div class="box box-success">

                    <div class="box-body box-profile">

                          <!--<img class="profile-user-img img-responsive img-circle" src="" alt="Perfil">-->

                        <h3 class="profile-username text-center"><?= $data_user->username ?></h3>

                        <p class="text-muted text-center"><?= $data_user->email ?></p>

                        <?php if($data_user->category ==1){ ?>

                        <p class="text-muted text-center">Aquicultura</p>

                        <?php }else if($data_user->category ==2){ ?>

                        <p class="text-muted text-center">Biologia</p>

                        <?php }else if($data_user->category ==3){ ?>

                        <p class="text-muted text-center">Computação</p>

                        <?php }else if($data_user->category ==4){ ?>

                        <p class="text-muted text-center">Engenharia</p>

                        <?php } ?>

                        <hr>

                        <ul>

                            <li>

                                <a href="<?= base_url('areadoaluno')?>">

                                    <i class="fa fa-home"></i> Home

                                </a>

                            </li>

                        </ul>

                        <hr>

                        <ul>

                        <li>

                         <a href="<?= base_url('minicursos')?>">Minicursos disponíveis</a>

                        </li>

                       

                        </ul>

                        <ul>

                            <li>

                            <a href="<?= base_url('submissao')?>">Submeter Trabalho</a>

                            </li>

                        </ul>

                        <a href="<?=base_url('login/logout') ?>" class="btn btn-success"><i class="fa fa-sign-out text-center"></i> Sair</a>

                    </div>

            <!-- /.box-body -->

                </div>

             </div>

            <div class="col-md-9"style="padding-right: 5px;">

                <div class="box box-success">

            <div class="box-body box-profile">

              <!--<img class="profile-user-img img-responsive img-circle" src="" alt="Perfil">-->

              <h3 class="profile-username text-center">Área do Participante</h3>

              <p class="text-muted text-center">III Conferência de Tecnologia e Desenviolvimento na Amazônia - CTDA  - 2019</p>

              

              <hr>

              

                <form>

                <div class="col-md-6 col-sm-12">

                    <div class="form-group">

                        <label for="categoria">Escolha sua categoria</label>

                       <select name="categoria" class="form-control" id="categoria">

                            <option value="1">Estudantes de graduação e estudantes de escolas técnicas  </option>

                            <option value="2">Estudantes de pós-graduação</option>

                            <option value="3">Profissionais (professores, pesquisadores e técnicos)</option>

                            <option value="4">Estudantes de graduação e estudantes de escolas técnicas + Mini Curso</option>

                            <option value="5">Estudantes de pós graduação, professores e profissionais + Mini Curso</option>

                            <option value="6">Inscrição de professores e profissionais + Mini Curso</option>


                        </select>

                    </div>
                    <div class="form-group selecionar-option-minicurso hide">
                    	<label for="minicurco">Escolha seu Mini curso</label>

                       <select name="minicurco" class="form-control" id="minicurco">
                           <?php foreach ($lista as $l) { ?>
                            <option value="1"><?= $l->titulo ?> - <?= $l->valor ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">

                    <button type="button"  style="background-color: #7FBB00; color: white;" class="btn btn-block continuar-para-pagamento hide">Pagar minha inscrição</button>

                    </div>

                    <div class="clearfix"></div> 

                 </div>

                </form>

             

              

            </div>

            <!-- /.box-body -->

         </div>

            </div>

        </div>

    </div>

</div>

<div class="row area-de-pagamento hide" style="background-color: #eee; height: auto;width: auto;">

	<div class="col-md-12"><!--fora do box-->

	<div class=" box box-success">

		  		<div><h4 class="text-center box-title">Completar minha inscrição no evento</h4></div>

		  		<div class="box-body">

		  		<div class="col-md-12">



		  			<h5 class="text-center text-bold">Minha inscrição</h5> 



		  			<div class="col-md-12">

				<table class="table table-bordered">

					<thead>

						<tr>

							<th class="text-center text-bold">Cód.</th>

							<th class="text-center text-bold">Categoria</th>

							<th class="text-center text-bold">Valor</th>

							<th class="text-center text-bold">Subtotal</th>

							

						</tr>

					</thead>

					<tbody>

						<tr>

							<td class="text-center codigo-categoria hide"></td>

							<td class="valor-categoria-selecionada hide">
							</td>

							<td class="text-center valor-exibir-carrinho hide">

							

							</td>

							<td class="text-center valor-exibir-carrinho hide">

								

							</td>

						</tr>

					</tbody>

					<tfoot>

						<tr>

							<th colspan="3" class="text-bold text-right">Total da Inscrição</th>

							<th class="text-right valor-exibir-carrinho hide">

								

							</th>

						</tr>

					</tfoot>

				</table>

				<div class=" text-right">

				<p class="text-right"><a class="btn btn-info btn-sm btn-continuar-pagamento"  title="Continuar para o Pagamento"><i class="fa fa-cart-arrow-down"></i> Continuar para o Pagamento</a></p>

				</div>

				

				

			</div>

		  </div>

	</div>

</div>

</div><!--fora do box-->



<div class="col-md-12 informacoes-pagamento hide"><!--fora do box-->
<form action="" method="post" accept-charset="utf-8" class="form-checkout-pagamento ">
	<div class="col-md-6">

		<div class=" box box-success">

			  		<div class="box-body">

			  		<div class="col-md-12">

						<div class="">

							<h3>Dados Pessoais</h3>


							<div class="valor-total-a-pagar"></div>

							<div class="form-group col-md-8">

		    					<label for="nome">Nome</label>

		    					<input type="text" class="form-control" id="nome" placeholder="Nome Completo" name="nome" value="<?php echo ($data_user != NULL ? $data_user->username : set_value('nome'))?>"  required>

		  					</div>

		  					<div class="form-group col-md-4">

		    					<label for="cpf">CPF</label>

		    					<input type="tel" data-mask="000.000.000-00" class="form-control" id="cpf" placeholder="000.000.000-00" name="cpf" value="" required>

		    					<div class="erro-cpf"></div>

		  					</div>

		  					

		  					<div class="form-group col-md-8">

		    					<label for="email">Email</label>

		    					<input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo ($data_user != NULL ? $data_user->email : set_value('email'))?>"  required>

		  					</div>

		  					<div class="form-group col-md-4">

		    					<label for="telefone">Telefone</label>

		    					<input type="tel" data-mask="(00) 00000-0000" class="form-control input_telefone" id="telefone" placeholder="(00) 00000-0000" name="telefone" value="" required>

		  					</div>

		  					<div class="col-md-6 text-right">

			  					<div class="input-group"> <!--form-group -->

									<input  type="tel" class="form-control " data-mask="00000-000" id="cep_c" placeholder="Digite seu CEP" name="cep_c">

									<span class="input-group-btn">

										<button style="margin-left: 6px;" type="button" class="btn btn-info btn-buscar-cep"> Buscar CEP</i></button>

									</span>

								</div>

							</div>

							<div class="informacoes-cep hide"><!--box-campo-endereco hide-->

			  					<div class="form-group col-md-12">

			    					<label for="endereco">Endereço</label>

			    					<input type="text" class="form-control" id="endereco" placeholder="Endereço" name="endereco">

			  					</div>

			  					<div class="form-group col-md-2">

			    					<label for="numero">Número</label>

			    					<input type="text" class="form-control" id="numero" placeholder="" name="numero">

			  					</div>

			  					<div class="form-group col-md-3">

			    					<label for="bairro">Bairro</label>

			    					<input type="text" class="form-control" id="bairro" placeholder="Bairro" name="bairro">

			  					</div>

			  					<div class="form-group col-md-3">

			    					<label for="cidade">Cidade</label>

			    					<input type="text" class="form-control" id="cidade" placeholder="Cidade" name="cidade">

			  					</div>

			  					<div class="form-group col-md-4">

			    					<label for="estado">Estado</label>

			    					<select class="form-control"  id="estado"  name="estado">

										<option value="AC">Acre</option>

										<option value="AL">Alagoas</option>

										<option value="AP">Amapá</option>

										<option value="AM">Amazonas</option>

										<option value="BA">Bahia</option>

										<option value="CE">Ceará</option>

										<option value="DF">Distrito Federal</option>

										<option value="ES">Espírito Santo</option>

										<option value="GO">Goiás</option>

										<option value="MA">Maranhão</option>

										<option value="MT">Mato Grosso</option>

										<option value="MS">Mato Grosso do Sul</option>

										<option value="MG">Minas Gerais</option>

										<option value="PA">Pará</option>

										<option value="PB">Paraíba</option>

										<option value="PR">Paraná</option>

										<option value="PE">Pernambuco</option>

										<option value="PI">Piauí</option>

										<option value="RJ">Rio de Janeiro</option>

										<option value="RN">Rio Grande do Norte</option>

										<option value="RS">Rio Grande do Sul</option>

										<option value="RO">Rondônia</option>

										<option value="RR">Roraima</option>

										<option value="SC">Santa Catarina</option>

										<option value="SP">São Paulo</option>

										<option value="SE">Sergipe</option>

										<option value="TO">Tocantins</option>

									</select>

	  							</div>

							</div>

									

						</div>

			  		</div>

				</div>

		</div>

	</div>

	<div class="col-md-6">

		<div class=" box box-success">

			  		<div class="box-body">

			  		<div class="col-md-12">

			  			<div class="col-md-12">

							<h3><i class="fa fa-credit-card"> </i> Pagamento</h3>



								<div class="form-group" style="margin-bottom: 30px;">

									<label for="forma_pagamento">Escolha sua forma de Pagamento</label>

									<select name="forma_pagamento" class="form-control select-forma-pagamento">

										<option value="1">Cartão de Crédito</option>

										<option value="2">Boleto Bancário</option>

									</select>

								</div>

								<div class="erro_validacao"></div>

								<div class="mensagem-confirmacao-pagamento-js hide"></div>

								<div class="pagamento-cartao">

									<!--Bandeiras-->

									<div class="bandeiras">

										<div class="bandeira-cartao">

											<ul style="list-style: none;padding-left: 0px; display: inline-block; padding: 5px;

									">	

												<li style="display: inline-block;">

													<p class="text text-green">Cartões: </p>

												</li>

												<li style="display: inline-block; border: 1px solid #ccc;" class="master-card"></li>

												<li style="display: inline-block; border: 1px solid #ccc;" class="visa"></li>

												<li style="display: inline-block; border: 1px solid #ccc;" class="elo"></li>

											</ul>

											<div class="alert alert-success" role="alert">Para sua maior segurança, não armazenamos as informações do seu cartão em nossa base de dados.</div>

										</div> 

									</div>

									<!-- cartão escolhido-->

									<div class="cartao-escolhido hide"></div>

									<div class="informacoes-cartao-credito hide">

									<div class="form-group col-md-12">

										<!--data-mask="0000 0000 0000 0000"-->

				    					<label for="cc_numero">Número do Cartão</label>

				    					<input type="tel"  class="form-control" id="cc_numero" placeholder="0000 0000 0000 0000" name="cc_numero">

			    					</div>

			    					<div class="form-group col-md-12">

				    					<label for="cc_titular">Nome do titular</label>

				    					<input type="text" class="form-control" id="cc_titular" placeholder="Nome Completo" name="cc_titular">

			    					</div>

			    					<div class="form-group col-md-6">

				    					<label for="cc_data_nascimento">Data de Nasc.(Titular do cartão)</label>

				    					<input type="text" data-mask="00/00/0000" class="form-control" id="cc_data_nascimento" placeholder="00/00/0000" name="cc_data_nascimento">

			    					</div>

			    					<div class="form-group col-md-6">

				    					<label for="cc_cpf">CPF (Titular do cartão)</label>

				    					<input type="tel" data-mask="000.000.000-00" class="form-control" id="cc_cpf" placeholder="000.000.000-00" name="cc_cpf">

			  						</div>

			    					<div class="form-group col-md-3">

				    					<label for="cc_validade">validade</label>

				    					<input type="tel" data-mask="00/0000" class="form-control" id="cc_validade" placeholder="00/0000" name="cc_validade">

			    					</div> 

			    					<div class="form-group col-md-3">

				    					<label for="cc_codigo">código</label>

				    					<input type="tel" data-mask="000" class="form-control" id="cc_codigo" placeholder="000" name="cc_codigo">

			  						</div>

			  							<input type="hidden" name="cc_bandeira" id="cc_bandeira">
				    					<input type="hidden" class="form-control" id="cc_tokencard" name="cc_tokencard">
			  							<input type="hidden" id="cc_HashCard" name="hashCard">
			  						

			  						<div class="form-group">

			  							<input type="hidden" id="ValorParcelas" name="ValorParcelas"></div>

			  						<div class="text-right">  

									<button type="submit" class="btn btn-success btn-pagar-cartao btn-cc-js">Pagar com cartão de crédito</button>

									</div>

								</div><!--hide info-c-c-->

								</div>



								<div class="pagamento-boleto hide">

									<div class="alert alert-info antes-msg-impressao-boleto" role="alert">Impressão do boleto no final da compra.</div>

									<div>

									<div class="alert alert-default depois-msg-impressao-boleto hide" role="alert"></div>

									<div class="text-right"> 

									<button type="button" class="btn btn-success btn-pagar-boleto">Pagar com Boleto Bancário</button>

									</div>

									</div>

								</div>



							

						</div>

			  		</div>

				</div>

		</div>

	</div>
</form>
</div><!--fora do box-->

</div>

