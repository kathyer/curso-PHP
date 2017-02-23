<footer class="estiloFooter">
    <a name="contacto"></a>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class=" col-sm-6 col-lg-6 col-md-6" >
                            <div>
                                <div class="col-sm-6 col-lg-6 col-md-6 direccion">
                                    <img src="LOGO/logofondoscuro.png" width="70%">
                                </div>
                                 <div class="col-sm-6 col-lg-6 col-md-6 direccion">
                                        <h3>DULCE HOGAR</h3>

                                        <p class="calle">
                                            C/ Sal si puedes nº 69 Bajo<br/>
                                            Localidad: Narnia<br/>
                                            Pais: El de Peter Pan<br/>
                                            Teléfono: 654321987<br/>
                                            DulceHogar@gmail.com<br/>
                                        </p>
                                </div>
                            </div>

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1553.055506083714!2d-6.9692234422765456!3d38.87570189382802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd16e43eac5f354d%3A0x688c7e359714a4a9!2sBadajoz!5e0!3m2!1ses!2ses!4v1480350108362"  frameborder="0" width="100%" height="100%" style="border:0" allowfullscreen class="mapa"></iframe> <!--width="600" height="450"-->

                         
                        </div>
                        <div class=" col-sm-6 col-lg-6 col-md-6">
                            <div class="contacto col-sm-10 col-lg-10 col-md-10">
                                <form action="salida.php" method="POST" class="form-group">
                                    <label for="nombre"> Nombre: </label>
                                    <input type="text" id="nombre" name="nombre" placeholder="Nombre" required="required" class="form-control" />
                                    <br/>
                                    <label for="correo">Email: </label>
                                    <input type="email" name="correo" required="required" placeholder="Email" class="form-control" />
                                    <br>
                                    <label for="telefono">Teléfono: </label>
                                    <input type="tel" name="telefono"  placeholder="Telefono" class="form-control"/>
                                    <br/>
                                    <label for="departamentos">Contactar con: </label>
                                    <select id="departamentos" name="departamentos" class="form-control">
                                        <option value="comercial">Departamento comercial</option>
                                        <option value="marketing">Departamento de marketing</option>
                                        <option value="desarrollo">Departamento de desarrollo</option>
                                    </select>
                                    <br/>
                                    <label for="cuentanos">Cuéntanos, te escuchamos. </label>
                                    <textarea rows=4 cols="41" name="cuentanos">Cuentanos, te escuchamos.</textarea>
                                    <br/>
                                    <input type="checkbox" name="condiciones" value="1" required="required"> He leído y acepto <a href="condiciones.html" class="condiciones" target="_blank"> los términos y condiciones </a> del aviso legal y las políticas de privacidad.
                                    <br/>
                                    <input type="submit" value="Enviar" class="btn btn-default btn-lg active boton"/>
                                </form>
                                <hr/>
                                <div class="siguenos">Síguenos en 
                                    <a href="https://es-es.facebook.com/"><img src="img/facebook.png" width="25px" height="auto"/></a>  
                                    <a href="https://www.instagram.com/"><img src="img/instagram.png" width="25px" height="auto"/></a>  
                                    <a href="https://www.linkedin.com/"><img src="img/linkedin.png" width="25px" height="auto"/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="estiloCopyright">
            <hr>
            Copyright &copy; GrupoDerecha, curso PHP-HTML
        </div>
    </footer>

</body>

</html>