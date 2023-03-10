<?php
include_once("../modelo/SocioModelo.php");
include_once("../modelo/ReservaModelo.php");

function mapaMesas(){
    echo'
    <div class="parent"><!-- mapa y mesas -->
      <div class="children">
        <img src="../img/planoCarballeiraMesas.jpg" />
        <div class="users">
          <div class="mesa m1 libre" data-mesa="1">
            1
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="1"
                data-mesa="1"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m2 libre" data-mesa="2">
            2
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="2"
                data-mesa="2"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m3 libre" data-mesa="3">
            3
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="3"
                data-mesa="3"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m4 libre" data-mesa="4">
            4
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="4"
                data-mesa="4"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m5 libre" data-mesa="5">
            5
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="5"
                data-mesa="5"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m6 libre" data-mesa="6">
            6
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="6"
                data-mesa="6"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m7 libre" data-mesa="7">
            7
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="7"
                data-mesa="7"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m8 libre" data-mesa="8">
            8
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="8"
                data-mesa="8"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m9 libre" data-mesa="9">
            9
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="9"
                data-mesa="9"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m10 libre" data-mesa="10">
            10
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="10"
                data-mesa="10"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m11 libre" data-mesa="11">
            11
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="11"
                data-mesa="11"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m12 libre" data-mesa="12">
            12
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="12"
                data-mesa="12"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m13 libre" data-mesa="13">
            13
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="13"
                data-mesa="13"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m14 libre" data-mesa="14">
            14
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="14"
                data-mesa="14"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m15 libre" data-mesa="15">
            15
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="15"
                data-mesa="15"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m16 libre" data-mesa="16">
            16
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="16"
                data-mesa="16"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m17 libre" data-mesa="17">
            17
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="17"
                data-mesa="17"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m18 libre" data-mesa="18">
            18
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="18"
                data-mesa="18"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m19 libre" data-mesa="19">
            19
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="19"
                data-mesa="19"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m20 libre" data-mesa="20">
            20
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="20"
                data-mesa="20"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m21 libre" data-mesa="21">
            21
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="21"
                data-mesa="21"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m22 libre" data-mesa="22">
            22
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="22"
                data-mesa="22"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m23 libre" data-mesa="23">
            23
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="23"
                data-mesa="23"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m24 libre" data-mesa="24">
            24
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="24"
                data-mesa="24"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m25 libre" data-mesa="25">
            25
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="25"
                data-mesa="25"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m26 libre" data-mesa="26">
            26
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="26"
                data-mesa="26"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m27 libre" data-mesa="27">
            27
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="27"
                data-mesa="27"
                hidden="hidden"
              />
            </form>
          </div>
          <div class="mesa m28 libre" data-mesa="28">
            28
            <form action="" method="post">
              <input
                type="checkbox"
                name="mesaEscogida"
                id="28"
                data-mesa="28"
                hidden="hidden"
              />
            </form>
          </div>
        </div>
      </div>
    </div>
    ';
}
function busquedaSocio(){
  echo'
  <fieldset> <!-- BUSCAR SOCIO -->
  <legend>BUSCAR SOCIO</legend>
  <form action="controladorEmpanada.php" method="get">
  <p>Rellenar mínimo un campo</p>

    <div>
      <label for="numSocio">NUMERO SOCIO</label>
      <input type="text" name="numSocio" />
    </div>

    <div>
      <label for="nome">NOME COMPLETO</label>
      <input type="text" name="nome" />
    </div>

    <div>
      <label for="dni">DNI (sen letra)</label>
      <input type="text" name="dni" />
    </div>

    <div>
      <label for="email">EMAIL</label>
      <input type="email" name="email" />
    </div>
    <input type="submit" id="buscar" name="buscar" value="Buscar" />

  </form>
  </fieldset>
  ';
}
function formulariosBusquedaReservas(){
    echo'
    <fieldset>
    <legend>RESERVAR</legend>
    <form action="controladorEmpanada.php" method="get" class="formdatos">
      <fieldset>
        <legend>DATOS</legend>
        <label for="nomeCompleto">NOME COMPLETO </label>
        <input type="text" name="nomeCompleto" />

        <label for="tlf">TELEFONO</label>
        <input type="text" name="tlf" />

        <label for="email">EMAIL</label>
        <input type="email" name="email" />

        <label for="pena">PEÑA</label>
        <input type="text" name="pena" />
      </fieldset>
      <fieldset>
        <legend>SOCIO</legend>
        <label for="socio">SI</label>
        <input type="radio" name="socio" id="socioSi" value="SI" />
        <label for="socio">NO</label>
        <input type="radio" name="socio" id="socioNo" value="NO" checked/>
        <input type="hidden" name="idSocio" class="idSocio" />
        </fieldset>
      <fieldset>
        <legend>UBICACION</legend>
        <span class="zonaSpan"></span>
        <label for="zona"></label>
      <input type="hidden" name="zona" class="zona" />
      </fieldset>
      <label for="observacions">OBSERVACIÓNS</label>
      <input type="text" name="observacions" />
      <fieldset>
        <legend>MESAS</legend>
        <span class="mesasEscogidSpan">NINGUNA</span>
        <br>
        <span>Total mesas: </span><span class="numeMesasSpan">0</span>
        <label for="mesasEscogidas"></label>
        <input type="hidden" name="mesasEscogidas" class="mesasEscogidas"/>

        <label for="numeroMesas"></label>
        <input type="hidden" name="numeroMesas" class="numeroMesas"/>
      </fieldset>
      <fieldset>
        <legend>PRECIO</legend>
        <span class="precioSpan">0</span><span> €</span>
        <label for="precio"></label>
        <input type="hidden" name="precio" class="precio" />
      </fieldset>

      <input type="submit" name="reservar" value="Reservar" />
    </form>
  </fieldset>
    ';
}
function mostrarSocios($resultado){
  echo "<table>
          <tr>
            <th>Numero de Socio</th>
            <th>Nome Completo</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Copiar en el formulario</th>
          </tr>
  ";
  foreach ($resultado as $key) {
    # code...
    
    echo "<tr >
            <td class=socio".$key->numSocio.">".$key->numSocio."</td>
            <td class=socio".$key->numSocio.">".$key->NomeCompleto."</td>
            <td class=socio".$key->numSocio.">".$key->telefono."</td>
            <td class=socio".$key->numSocio.">".$key->email."</td>
            <td><button id='pegar' data-id='".$key->numSocio."'>COPIAR</button></td>
          </tr>";
  }  
  echo"</table>";
}

function reservaRealizada(){
  echo"<h2>LA RESERVA HA SIDO REALIZADA</h2>
  
      <a href='controladorEmpanada.php'>Volver</a>;";
}