<table border=1>
          <tr>
            <td colspan="11" align="center">Tipo de cadastro: <?php echo $tipo_cadastro;?></td>
          </tr>
          <tr>
            <td colspan="11" align="center"><span>Silpa Pe&ccedil;as e Equipamentos LTDA</span></td>
          </tr>
          <tr>
            <td colspan="11" align="center" class="subtitulo"><b>DADOS DA EMPRESA</b></td>
          </tr>
          <tr>
            <td colspan="5" bgcolor="#CCCCCC">Raz&atilde;o Social (Sem Abrevia&ccedil;&otilde;es):</td>
            <td colspan="6">
              <?php echo $razao_social ?>
          	</td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">Nome Fantasia:</td>
            <td colspan="9">
              <?php echo $nome_fantasia?>
            </td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">CNPJ:</td>
            <td colspan="9">
              <?php echo $cnpj?>
            </td>
          </tr>
          <tr>
            <td colspan="5" bgcolor="#CCCCCC">Endere&ccedil;o (Rua, Av, etc...):</td>
            <td colspan="3"><?php echo $address?>
            </td>
            <td width="16%" bgcolor="#CCCCCC">N&ordm;:</td>
            <td width="16%">
              <?php echo $numero?>
            </td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">Cidade:</td>
            <td colspan="4"><?php echo $city?>
            </td>
            <td bgcolor="#CCCCCC">UF:</td>
            <td><?php echo $estado_select;?>
            </td>
            <td bgcolor="#CCCCCC">CEP:</td>
            <td colspan="5"><?php echo $cep?></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">Bairro:</td>
            <td colspan="5"><?php echo $bairro?></td>
            <td bgcolor="#CCCCCC">Complemento:</td>
            <td colspan="3"><?php echo $complemento?></td>
          </tr>
          <tr>
            <td colspan="11" align="center" class="subtitulo"><b>ATIVIDADES E DADOS FINANCEIROS</b></td>
          </tr>
          <tr>
            <td colspan="3" bgcolor="#CCCCCC"><p>Data Constitui&ccedil;&atilde;o:</p></td>
            <td colspan="4"><?php echo $data_constituicao;?></td>
            <td bgcolor="#CCCCCC">CNAE:</td>
            <td colspan="3"><?php echo $cnae;?></td>
          </tr>
          <tr>
            <td colspan="3" bgcolor="#CCCCCC">Inscri&ccedil;&atilde;o Estadual:</td>
            <td colspan="4"><?php echo $ie;?></td>
            <td bgcolor="#CCCCCC">Inscri&ccedil;&atilde;o Municipal:</td>
            <td colspan="3"><?php echo $im;?></td>
          </tr>
          <tr>
            <td colspan="3" bgcolor="#CCCCCC">Regime Fiscal:</td>
            <td colspan="5"><?php echo $regime_fiscal;?></td>
            <td bgcolor="#CCCCCC"><?php echo utf8_decode("Benefício Fiscal");?>:</td>
            <td colspan="3"><?php echo $beneficio_fiscal;?></td>
          </tr>
          <tr>
            <td colspan="3" bgcolor="#CCCCCC">Ramo Atividade:</td>
            <td colspan="9"><?php echo $ramo;?></td>
          </tr>
          <tr>
            <td colspan="7" bgcolor="#CCCCCC">Apenas estado MT cliente optou pelo regime de tributa&ccedil;&atilde;o por estimativa:</td>
            <td><?php echo $trib_estimativa;?></td>
            <td bgcolor="#CCCCCC"><?php echo utf8_decode("Alíquota CNAE:");?></td>
            <td colspan="2">
              <?php echo $aliq_cnae;?>
			</td>
          </tr>
          <tr>
            <td colspan="11" align="center" class="subtitulo"><b>COMUNICA&Ccedil;&Atilde;O EMPRESA</b></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">DDD:</td>
            <td colspan="5" bgcolor="#CCCCCC">N&ordm; do Telefone 1:</td>
            <td colspan="2" bgcolor="#CCCCCC">N&ordm; do Telefone 2:</td>
            <td colspan="2" bgcolor="#CCCCCC">Fax:</td>
          </tr>
          <tr>
            <td colspan="2"><?php echo $ddd;?></td>
            <td colspan="5"><?php echo $numero1;?></td>
            <td colspan="2"><?php echo $numero2;?></td>
            <td colspan="2"><?php echo $fax;?></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">Site:</td>
            <td colspan="9"><?php echo $site;?></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">E-mail:</td>
            <td colspan="9"><?php echo $email;?></td>
          </tr>
          <tr>
            <td colspan="4" bgcolor="#CCCCCC">Endere&ccedil;o de Cobran&ccedil;a:</td>
            <td colspan="9"><?php echo $endereco_cobranca;?></td>
          </tr>
          <tr>
          	<td bgcolor="#CCCCCC">UF*:</td>
          	<td><?php echo $estado_cobranca;?></td>
            <td bgcolor="#CCCCCC">Cidade*:</td>
            <td colspan="4"><?php echo $city_cobranca;?></td>
            <td bgcolor="#CCCCCC">CEP*:</td>
            <td colspan="2"><?php echo $cep_cobranca;?></td>
          </tr>
          <tr>
            <td colspan="11" align="center" class="subtitulo">CONTATOS EMPRESA</td>
          </tr>
          <tr>
            <td colspan="11" bgcolor="#CCCCCC" class="subsub">SETOR DE COMPRAS:</td>
          </tr>
          <tr>
            <td colspan="4" bgcolor="#CCCCCC">Nome do Contato</td>
            <td colspan="4" bgcolor="#CCCCCC">Telefone</td>
            <td colspan="5" bgcolor="#CCCCCC">E-mail</td>
          </tr>
          <tr>
            <td colspan="4"><?php echo $contato_compras;?></td>
            <td colspan="4"><?php echo $telefone_compras;?></td>
            <td colspan="5"><?php echo $email_compras;?></td>
          </tr>
          <tr>
            <td colspan="11" bgcolor="#CCCCCC" class="subsub">SETOR FISCAL:</td>
          </tr>
          <tr>
            <td colspan="4" bgcolor="#CCCCCC">Nome do Contato</td>
            <td colspan="4" bgcolor="#CCCCCC">Telefone</td>
            <td colspan="5" bgcolor="#CCCCCC">E-mail</td>
          </tr>
          <tr>
            <td colspan="4"><?php echo $contato_fiscal;?></td>
            <td colspan="4"><?php echo $telefone_fiscal;?></td>
            <td colspan="5"><?php echo $email_fiscal;?></td>
          </tr>
          <tr>
            <td colspan="11" bgcolor="#CCCCCC" class="subsub">SETOR FINANCEIRO:</td>
          </tr>
          <tr>
            <td colspan="4" bgcolor="#CCCCCC">Nome do Contato</td>
            <td colspan="4" bgcolor="#CCCCCC">Telefone</td>
            <td colspan="5" bgcolor="#CCCCCC">E-mail</td>
          </tr>
          <tr>
            <td colspan="4"><?php echo $contato_financeiro;?></td>
            <td colspan="4"><?php echo $telefone_financeiro;?></td>
            <td colspan="5"><?php echo $email_financeiro;?></td>
          </tr>
          <tr>
            <td colspan="11" bgcolor="#CCCCCC">ENVIO ARQUIVO XML</td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">E-mail:</td>
            <td colspan="9"><?php echo $email_xml;?></td>
          </tr>
          <tr>
            <td colspan="11" align="center" class="subtitulo"><b>REFER&Ecirc;NCIAS BANC&Aacute;RIAS</b></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3" align="center" bgcolor="#CCCCCC">Banco</td>
            <td align="center" bgcolor="#CCCCCC">Ag&ecirc;ncia</td>
            <td colspan="2" align="center" bgcolor="#CCCCCC">Conta</td>
            <td colspan="2" align="center" bgcolor="#CCCCCC">Telefone</td>
            <td colspan="2" align="center" bgcolor="#CCCCCC">Gerente</td>
          </tr>
          <tr>
            <td width="3%" bgcolor="#CCCCCC">1&ordm;</td>
            <td colspan="3"><?php echo $banco1;?></td>
            <td><?php echo $agencia1;?></td>
            <td colspan="2"><?php echo $conta1;?></td>
            <td colspan="2"><?php echo $telefone_conta_1;?></td>
            <td colspan="2"><?php echo $gerente_conta_1;?></td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC">2&ordm;</td>
            <td colspan="3"><?php echo $banco2;?></td>
            <td><?php echo $agencia2;?></td>
            <td colspan="2"><?php echo $conta2;?></td>
            <td colspan="2"><?php echo $telefone_conta_2;?></td>
            <td colspan="2"><?php echo $gerente_conta_2;?></td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC">3&ordm;</td>
            <td colspan="3"><?php echo $banco3;?></td>
            <td><?php echo $agencia3;?></td>
            <td colspan="2"><?php echo $conta3;?></td>
            <td colspan="2"><?php echo $telefone_conta_3;?></td>
            <td colspan="2"><?php echo $gerente_conta_3;?></td>
          </tr>
          <tr>
            <td colspan="11" align="center" class="subtitulo"><b>REFER&Ecirc;NCIAS COMERCIAIS</b></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="5" align="center" bgcolor="#CCCCCC">Fornecedores</td>
            <td colspan="3" align="center" bgcolor="#CCCCCC">CNPJ</td>
            <td colspan="2" align="center" bgcolor="#CCCCCC">Telefone</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC">1&ordm;</td>
            <td colspan="5"><?php echo $fornecedor1;?></td>
            <td colspan="3"><?php echo $fornecedor_cnpj1;?></td>
            <td colspan="2"><?php echo $fornecedor_telefone1;?></td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC">2&ordm;</td>
            <td colspan="5"><?php echo $fornecedor2;?></td>
            <td colspan="3"><?php echo $fornecedor_cnpj2;?></td>
            <td colspan="2"><?php echo $fornecedor_telefone2;?></td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC">3&ordm;</td>
            <td colspan="5"><?php echo $fornecedor3;?></td>
            <td colspan="3"><?php echo $fornecedor_cnpj3;?></td>
            <td colspan="2"><?php echo $fornecedor_telefone3;?></td>
          </tr>
          <tr>
            <td colspan="10" align="center">
            <div id="declaracao" style="border:1px solid #F00; width:500px; padding:5px 10px;">
                	<h3>DECLARA&Ccedil;&Atilde;O</h3>
                	<p>Declaramos estar cientes e expressamente de acordo que as informa&ccedil;&otilde;es e documentos adicionais anexados ao presente sejam utilizados para a abertura e manuten&ccedil;&atilde;o de cadastro, an&aacute;lise e controles internos.</p>
                	<p>Declaramos que as informa&ccedil;&otilde;es prestadas s&atilde;o ver&iacute;dicas e estamos cientes de que a omiss&atilde;o ou declara&ccedil;&atilde;o falsa configura-se "Crime de falsidade ideol&oacute;gica".</p>
                    <p>Comprometo-me de informar eventuais mudan&ccedil;as de endere&ccedil;o, contratuais e outras que ocorreram.</p>
                    <b><?php echo date("d/m/Y") ?></b>
                </div><!--Declaração-->
                <br />
                <input type="checkbox" name="declara" value="<?php echo $declara;?>" checked="checked" readonly="readonly"/><b> Aceito os termos acima descritos</b>
            </td>
          </tr>
        </table>