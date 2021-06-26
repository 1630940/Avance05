<div class="row">

<div class="large-9 columns">
    <h3>Manejo de base de datos</h3>
    <p> Listado </p>
    <div class="section-container tabs" data-section>
        <section class="section">
            <div class="content" data-slug="panel1">
                <div class="row">
                </div>
                <table>
                    <thead>
                        <tr>
                            <th width="200">ID</th>
                            <th>Correo</th>
                            <th width="150">Contraseña</th>
                            <th>Dirección</th>
                            <th >Profesión</th>
                            <th width="200">Telefono</th>

                        </tr>                        
                    </thead>
                    <tbody>
                    <?php 
                        while($user = $result->fetch_assoc())
                        {
                        ?>
                        <tr>
                            <td><?php echo $user['ID'];?></td>
                            <td><?php echo $user['E-mail'];?></td>
                            <td><?php echo $user['Password'];?></td>
                            <td><?php echo $user['Direccion'];?></td>
                            <td><?php echo $user['Profesion'];?></td>
                            <td><?php echo $user['Telefono'];?></td>

                        </tr>
                        <?php
                }
                  ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>
<footer class="row">
    <div class="large-12 columns">
    <hr/>
    <div class="row">
        <div class="large-6 columns">
            <p>&copy; Copyright <?php echo say_year(); ?></p>
        </div>
    <div class="large-6 columns">
        <ul class="inline-list right">
            <li><a href="./index.php">Inicio</a></li>
        </ul> 
    </div>
</div>
</footer>
