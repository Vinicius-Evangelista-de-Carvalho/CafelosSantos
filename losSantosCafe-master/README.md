# losSantosCafe
Sitio de la cafetería Los Santos Café, realizada en PHP para el curso de Programación 3 de la Universidad Internacional de las Américas.

El sitio de se compone de 5 secciones, las cuales son:

1- Inicio
  En esta seccion se utiliza un slider que muestra algunos efectos en las imagenes, para esto se utiliza una librería de JavaScript
  llamada slicebox.
  
2- Menú
  Para esta sección se dividen las bebidas por submenús, en los cuales se consultan los datos  a la base de datos por medio de php a mysql
  y para manejar los datos se utiliza JSON
  Para la parte de la paginación se utiliza javaScript, para manipular el tamaño del DIV central y se logra mostrar los datos de 3 en 3.
  Las imagenes poseen la funcionalidad de darles click y se hace un llamado al elemento modal para mostrar la imagen en un primer plano.
  
3- Productos
  Esta sección es muy parecida a la anterior, ya que se utiliza la misma tecnica y diseño.

4- Acerca de nosotros
  En esta sección se muestra una imagen de la propietaria de la cafetería, la misión y visión de la cafetería y el logo de la misma.

5- contacto

se muestra un mapa con la ubicación de la cafetería, se implementa el plugin del face para hacer referencia a la página de la cafetería
también se encuentra un formulario de contacto, el cual permite enviar un correo con comentarios y algunos datos personales.
Para el envio del correo, se hace uso de la clase phpMailer, en la cual se utiliza el servidor de snmtp de Gmail para enviar el correo.

Para la parte de sitio de administración, se implemento un login, el cual permite el ingreso solamente a los administradores.
Se presenta un menú de administración, el cual permite ingresar las imágenes de los menús y productos al sitio.
Para ingresar las imágenes se hace uso de una clase en php llamada uploadImage, la cual permite subir al servidor solamente
imagenes con un tamaño determinado y a su vez registra los datos en la base de datos Mysql.

Para la seguridad del sitio se utiliza variables $_Session de PHP.

