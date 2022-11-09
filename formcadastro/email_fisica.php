<table border=1>
          <tr>
            <td colspan="11" align="center">Tipo de Cadastro: <?php echo $tipo_cadastro;?></td>
          </tr>
          <tr>
            <td colspan="11" align="center"><span>Silpa Pe&ccedil;as e Equipamentos LTDA</span></td>
          </tr>
          <tr>
            <td colspan="11" align="center" class="subtitulo">DADOS DA EMPRESA</td>
          </tr>
          <tr>
            <td colspan="5" bgcolor="#CCCCCC">Nome*:</td>
            <td colspan="6"><?php echo $fis_nome ?></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">RG*:</td>
            <td colspan="9"><?php echo $fis_rg;?></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">CPF*:</td>
            <td colspan="9"><?php echo $fis_cpf;?></td>
          </tr>
          <tr>
            <td colspan="5" bgcolor="#CCCCCC">Endere&ccedil;o (Rua, Av, etc...)*:</td>
            <td colspan="3"><?php echo $fis_address;?></td>
            <td width="16%" bgcolor="#CCCCCC">N&ordm;*:</td>
            <td width="16%"><?php echo $fis_numero;?></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">Cidade*:</td>
            <td colspan="4"><?php echo $fis_city;?></td>
            <td bgcolor="#CCCCCC">UF*:</td>
            <td><?php echo $fis_estado;?></td>
            <td bgcolor="#CCCCCC">CEP*:</td>
            <td colspan="5"><?php echo $fis_cep?></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">Bairro*:</td>
            <td colspan="5"><?php echo $fis_bairro?></td>
            <td bgcolor="#CCCCCC">Complemento:</td>
            <td colspan="3"><?php echo $fis_complemento?></td>
          </tr>
        	<tr>
        	  <td colspan="11" align="center" class="subtitulo">ATIVIDADES E DADOS</td>
      	  </tr>
          <tr>
        	  <td colspan="5" bgcolor="#CCCCCC">Data de Nascimento*:</td>
              <td colspan="6"><?php echo $fis_data_nasc;?></td>
      	  </tr>
          <tr>
        	  <td colspan="5" bgcolor="#CCCCCC">Profiss&atilde;o*:</td>
              <td colspan="6"><?php echo $fis_profissao;?></td>
      	  </tr>
          <tr>
        	  <td colspan="11" align="center" class="subtitulo">COMUNICA&Ccedil;&Atilde;O</td>
      	  </tr>
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">DDD*:</td>
            <td colspan="5" bgcolor="#CCCCCC">N&ordm; do Telefone 1*:</td>
            <td colspan="2" bgcolor="#CCCCCC">N&ordm; do Telefone 2:</td>
            <td colspan="2" bgcolor="#CCCCCC">Fax:</td>
          </tr>
          <tr>
            <td colspan="2"><?php echo $fis_ddd;?></td>
            <td colspan="5"><?php echo $fis_numero1;?></td>
            <td colspan="2"><?php echo $fis_numero2;?></td>
            <td colspan="2"><?php echo $fis_fax;?></td>
          </tr>
          <tr>
        	  <td colspan="5" bgcolor="#CCCCCC">E-mail*:</td>
              <td colspan="6"><?php echo $fis_email;?></td>
      	  </tr>
          <tr>
        	  <td colspan="5" bgcolor="#CCCCCC">Endere&ccedil;o de Cobran&ccedil;a*:</td>
              <td colspan="6"><?php echo $fis_end_cobranca;?></td>
      	  </tr>
          <tr>
          	<td bgcolor="#CCCCCC">UF*:</td>
          	<td><?php echo $fis_estado_cobranca;?></td>
            <td bgcolor="#CCCCCC">Cidade*:</td>
            <td colspan="4"><?php echo $fis_city_cobranca;?></td>
            <td bgcolor="#CCCCCC">CEP*:</td>
            <td colspan="2"><?php echo $fis_cep_cobranca;?></td>
          </tr>
          <tr>
        	  <td colspan="11" align="center" class="subtitulo">CONTATOS</td>
      	  </tr>
          <tr>
            <td colspan="11" bgcolor="#CCCCCC" class="subsub">ENVIO ARQUIVO XML:</td>
          </tr>
          <tr>
            <td colspan="5" bgcolor="#CCCCCC">E-mail*:</td>
            <td colspan="6"><?php echo $fis_emailxml;?></td>
          </tr>
          <tr>
            <td colspan="11" align="center" class="subtitulo">REFER&Ecirc;NCIAS BANC&Aacute;RIAS</td>
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
            <td colspan="3"><?php echo $fis_banco1;?></td>
            <td><?php echo $fis_agencia1;?></td>
            <td colspan="2"><?php echo $fis_conta1;?></td>
            <td colspan="2"><?php echo $fis_telefone_banco_1;?></td>
            <td colspan="2"><?php echo $fis_gerente_conta_1;?></td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC">2&ordm;</td>
            <td colspan="3"><?php echo $fis_banco2;?></td>
            <td><?php echo $fis_agencia2;?></td>
            <td colspan="2"><?php echo $fis_conta2;?></td>
            <td colspan="2"><?php echo $fis_telefone_banco_2;?></td>
            <td colspan="2"><?php echo $fis_gerente_conta_2;?></td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC">3&ordm;</td>
            <td colspan="3"><?php echo $fis_banco3;?></td>
            <td><?php echo $fis_agencia3;?></td>
            <td colspan="2"><?php echo $fis_conta3;?></td>
            <td colspan="2"><?php echo $fis_telefone_banco_3;?></td>
            <td colspan="2"><?php echo $fis_gerente_conta_3;?></td>
          </tr>
          <tr>
            <td colspan="11" align="center" class="subtitulo">REFER&Ecirc;NCIAS COMERCIAIS</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="5" align="center" bgcolor="#CCCCCC">Fornecedores</td>
            <td colspan="3" align="center" bgcolor="#CCCCCC">CNPJ</td>
            <td colspan="2" align="center" bgcolor="#CCCCCC">Telefone</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC">1&ordm;</td>
            <td colspan="5"><?php echo $fis_fornecedor1;?></td>
            <td colspan="3"><?php echo $fis_fornecedor_cnpj1;?></td>
            <td colspan="2"><?php echo $fis_fornecedor_telefone1;?></td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC">2&ordm;</td>
            <td colspan="5"><?php echo $fis_fornecedor2;?></td>
            <td colspan="3"><?php echo $fis_fornecedor_cnpj2;?></td>
            <td colspan="2"><?php echo $fis_fornecedor_telefone2;?></td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC">3&ordm;</td>
            <td colspan="5"><?php echo $fis_fornecedor3;?></td>
            <td colspan="3"><?php echo $fis_fornecedor_cnpj3;?></td>
            <td colspan="2"><?php echo $fis_fornecedor_telefone3;?></td>
          </tr>
          <tr>
            <td colspan="10" align="center">
                <div id="declaracao">
                	<h3>DECLARA&Ccedil;&Atilde;O</h3>
                	<p>Declaramos estar cientes e expressamente de acordo que as informa&ccedil;&otilde;es e documentos adicionais anexados ao presente sejam utilizados para a abertura e manuten&ccedil;&atilde;o de cadastro, an&aacute;lise e controles internos.</p>
                	<p>Declaramos que as informa&ccedil;&otilde;es prestadas s&atilde;o ver&iacute;dicas e estamos cientes de que a omiss&atilde;o ou declara&ccedil;&atilde;o falsa configura-se "Crime de falsidade ideol&oacute;gica".</p>
                    <p>Comprometo-me de informar eventuais mudan&ccedil;as de endere&ccedil;o, contratuais e outras que ocorreram.</p>
                    <br /><br /><b><?php echo date("d/m/Y") ?></b>
                </div><!--Declaração-->
                <br />
              
                <input type="checkbox" name="declara" value="Concordo"  checked="checked"/><b> Aceito os termos acima descritos</b>
            </td>
          </tr>
        </table>