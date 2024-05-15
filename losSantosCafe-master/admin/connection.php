<?php 
    /**
    *  Conexion a la base de datos
    */
    class connection 
    {
        private $hostname    = 'localhost';
        private $username    = 'root';
        private $password    = 'root';
        private $database    = 'lossantoscafe';
        private $usuariosInfo = array();
        private $productos    = array();
        private $bebidas    = array();
        private $tipoBebidas = array();

        public function __constructor()

        {
           
        }

        public function getHostname(){
            return $this->hostname;
        }
        public function getUsername(){
            return $this->username;
        }
        public function getPassword(){
            return $this->password;
        }
        public function getSchema(){
            return $this->database;
        }

        /**
            *  Conexion a la base de datos
        */
        public function conectar_db()
        {
           try {

             $connexion = mysqli_connect(
                    $this->getHostname(),
                    $this->getUsername(),
                    $this->getPassword(),
                    $this->getSchema()
                ) OR DIE ('Error de Conexión');
                
                return $connexion;
            } catch (Exception $e) {
                echo $e->getMessage;
            }
        }

        /**
            *  Sentencia de SELECT de inicio de sesion
        */
        public function getUser ($usuario, $clave) {
            try {
                $sql = 'SELECT * FROM usuarios WHERE `nombre` = "' . $usuario . '" AND `password` = "' . $clave . '" AND `rol` = "administrador"';
                $query = mysqli_query ($this->conectar_db(),$sql);
            
                $usuariosInfo = mysqli_fetch_assoc($query);
                return $usuariosInfo;
                
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
        }

        /*
            *  Consultar las bebidas del menú solicitado
        */
        public function getBebidas ($tipoBebida) {
            try {
                $idTipoBebida = $this->getTipoBebida($tipoBebida);
                $sql = 'SELECT * FROM bebidas WHERE `idTipoBebida`= "' . $idTipoBebida. '"';
                $query = mysqli_query ($this->conectar_db(),$sql);

                $i = 0;
                while($queryData = mysqli_fetch_assoc($query)){
                    $this->bebidas[$i] = $queryData;
                    $i++;
                }
                
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
            return $this->bebidas;
        }
        /**
            *  Consultar las productos
        */
        public function getProductos () {
            try {
                $sql = 'SELECT * FROM productos';
                $query = mysqli_query ($this->conectar_db(),$sql);

                $i = 0;
                while($queryData = mysqli_fetch_assoc($query)){
                    $this->productos[$i] = $queryData;
                    $i++;
                }
                
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
            return $this->productos;
        }
        
    
        /**
            *  Sentencia de INSERT
        */
        public function addBebida ($nombre, $ruta, $idTipoBebida, $ingredientes)
        {
            try {

                $sql = 'INSERT INTO bebidas (`nombre`, `ruta`, `idTipoBebida`, `ingredientes`) VALUES ("' . $nombre . '","' . $ruta . '", "' . $idTipoBebida . '", "' . $ingredientes . '")';
                mysqli_query(connection::conectar_db(), $sql);
                return mysql_affected_rows();
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
        }

        public function addProducto ($nombre, $ruta, $descripcion)
        {
            try {

                $sql = 'INSERT INTO productos (`nombre`, `ruta`, `descripcion`) VALUES ("' . $nombre . '","' . $ruta . '", "' . $descripcion . '")';
                mysqli_query(connection::conectar_db(), $sql);
                return mysql_affected_rows();
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
        }

        /**
            *  Sentencia de SELECT del id del tipo Bebida
        */
        public function getTipoBebida ($tipoBebida) {
            try {
                $sql = 'SELECT idTipoBebida FROM tipoBebida WHERE `tipoBebida` = "' . $tipoBebida . '"';
                $query = mysqli_query ($this->conectar_db(),$sql);
            
                $bebidaInfo = mysqli_fetch_assoc($query);
                return $bebidaInfo["idTipoBebida"];
                
            } catch (Exception $e) {
                echo $e->getMessage();
            }            
        }
        public function getTipoBebidas () {
            try {
                $sql = 'SELECT * FROM tipoBebida';
                $query = mysqli_query ($this->conectar_db(),$sql);

                $i = 0;
                while($queryData = mysqli_fetch_assoc($query)){
                    $this->tipoBebidas[$i] = $queryData;
                    $i++;
                }
                
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
            return $this->tipoBebidas;
        }
        /**
            *  Sentencia de UPDATE
        */
        public function editProduct ($productId, $nombre, $descripcion, $img)
        {
            try {

                $sql = 'UPDATE productos SET `nombre` = "' . $nombre . '", `descripcion` =  "' . $descripcion .'" WHERE `id` = ' . $productId ;
                mysqli_query(Conectar::conectar_db(), $sql);

            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
        }

        public function __destructor () {
            mysqli_close(Conectar::conectar_db());
        }

    }
?>