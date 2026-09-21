## 1. Cliente vs. Servidor:
En una aplicación web podemos diferenciar entre la parte que se ejecuta en el dispositivo del usuario y la parte que se procesa en el servidor. En el lado del cliente se encuentra principalmente el navegador, que interpreta HTML y CSS y puede ejecutar JavaScript. En cambio, el servidor recibe las peticiones del usuario, procesa la lógica de la aplicación y genera una respuesta que después recibe el navegador.

En el caso de una aplicación desarrollada con PHP, el código PHP se ejecuta en el servidor y el usuario recibe el resultado generado, normalmente en forma de HTML. Por ejemplo, en la demostración realizada para esta práctica, PHP obtiene la fecha y la hora del servidor y las incluye en la página que recibe el navegador.

Es importante no confiar completamente en los datos enviados desde el cliente, ya que el usuario tiene control sobre su navegador y puede modificar o intentar saltarse las comprobaciones realizadas en él. Por este motivo, las validaciones importantes deben realizarse también en el servidor antes de utilizar los datos. Esto es especialmente importante en una tienda online, donde se deben comprobar datos como cantidades, precios, usuarios o pedidos.

## 2. Web Estática vs Web Dinámica:
Una web estática muestra un contenido que está preparado previamente en los archivos de la página. Este modelo puede ser suficiente para sitios con poca información y que apenas necesitan cambios, pero resulta menos práctico cuando el contenido se actualiza con frecuencia.

En una tienda online es más útil utilizar una web dinámica, ya que los productos, precios, stock, usuarios, pedidos o promociones pueden cambiar constantemente. En este caso, el servidor puede consultar los datos necesarios y generar una respuesta diferente según la petición del usuario. De esta forma, no es necesario modificar manualmente una página cada vez que cambia un producto o su disponibilidad.

Además, las aplicaciones web pueden utilizar APIs para intercambiar información entre diferentes sistemas. Por ejemplo, una API puede devolver los datos de unos productos en formato JSON para que otra aplicación pueda utilizarlos.

## 3. La Infraestructura (Servidores):
Para que una aplicación web pueda atender las peticiones de los usuarios necesita un servidor web, como Apache o Nginx. Su función principal es recibir las peticiones HTTP de los clientes y devolver la respuesta correspondiente. En el caso de PHP, el servidor web se comunica con el entorno que ejecuta PHP para que pueda procesar la lógica de la aplicación y generar el contenido que recibirá el navegador.

Una forma tradicional de ejecutar aplicaciones como PHP es mediante CGI (Common Gateway Interface). Su funcionamiento puede implicar la creación de un proceso nuevo para atender cada petición. Aunque funciona correctamente, cuando aumenta el número de peticiones supone un mayor consumo de recursos debido a la creación y finalización continua de procesos.

PHP-FPM (PHP FastCGI Process Manager) mejora este funcionamiento mediante un grupo o pool de procesos PHP preparados para atender las peticiones. Los procesos pueden reutilizarse en lugar de crear uno nuevo para cada solicitud, reduciendo el coste de gestión de procesos y permitiendo atender varias peticiones de una forma más eficiente.

Por otra parte, un framework como Laravel se sitúa en la parte de desarrollo de la aplicación. No sustituye al servidor web ni a PHP-FPM, sino que proporciona una estructura y herramientas para organizar la lógica del proyecto. Laravel permite trabajar, entre otras cosas, con rutas, controladores, modelos, bases de datos, sesiones, validaciones y middleware, facilitando la gestión de las diferentes partes de una aplicación web.

## 4. Evaluación de Herramientas y Frameworks:
Para el desarrollo del backend de la tienda online se propone utilizar PHP como lenguaje de programación y Laravel 12 como framework. PHP es una opción adecuada porque está orientado al desarrollo web del lado del servidor y permite generar contenido dinámico a partir de los datos y las peticiones recibidas.

Utilizar un framework como Laravel permite organizar mejor el código que si se desarrolla toda la aplicación utilizando únicamente PHP. Laravel proporciona una estructura definida para el proyecto y herramientas para trabajar con rutas, controladores, modelos, bases de datos, validaciones, sesiones y middleware. Esto facilita mantener el código separado por responsabilidades y hacer que la aplicación sea más sencilla de ampliar.

Una de sus principales ventajas es la organización de la aplicación mediante una arquitectura basada en el patrón MVC (Modelo-Vista-Controlador). De forma general, los modelos se encargan de trabajar con los datos, las vistas de mostrar la información al usuario y los controladores de coordinar la lógica de las peticiones. Esta separación ayuda a mantener el proyecto ordenado a medida que aumenta su tamaño.

Otra ventaja importante es que Laravel incorpora mecanismos que facilitan el desarrollo seguro, como la protección frente a ataques CSRF, herramientas de validación y sistemas de autenticación y autorización. Esto no significa que la aplicación sea segura automáticamente, pero sí proporciona herramientas y una estructura que ayudan al desarrollador a aplicar buenas prácticas de seguridad.

Laravel 12 mantiene esta estructura y proporciona un conjunto de herramientas actualizado para desarrollar aplicaciones web. Para el proyecto propuesto, sus convenciones, organización y herramientas permitirían desarrollar una aplicación de comercio electrónico de forma estructurada y con posibilidad de ampliarla en el futuro.

