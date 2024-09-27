# Problema número 197

Desarrollado por **Christian Monrabal** y **Juan Carlos Prado** - DAW 2

Este proyecto se centra en el desafío de desencriptar un texto utilizando diversas reglas específicas. Estas reglas han sido ilustradas en los diagramas que se presentan a continuación. A lo largo del desarrollo del trabajo, también hemos tenido la oportunidad de implementar la encriptación del texto, lo cual resulta en que la primera función (la conversión de X a X') es prácticamente idéntica a la de desencriptar, mientras que la segunda función, que convierte de X' a X'', presenta un enfoque diferente y más complejo.

## PROCESO DE ENCRIPTACIÓN

### ESQUEMA DE TRANSFORMACIÓN DE X A X'
![Esquema de X a X'](ruta/a/tu/imagen_x_a_x1.png)

Este esquema describe cómo se transforma un texto original (X) en un texto encriptado (X'). En esta fase, aplicamos reglas específicas que permiten modificar el texto de manera que se vuelva ilegible para aquellos que no conozcan el método de encriptación.

### ESQUEMA DE TRANSFORMACIÓN DE X' A X''
![Esquema de X' a X''](ruta/a/tu/imagen_x1_a_x2.png)

En este segundo esquema, el texto encriptado (X') se transforma nuevamente en un nuevo formato (X''). Este proceso puede incluir pasos adicionales que refuercen la seguridad del texto, haciendo que la desencriptación sea más complicada sin el conocimiento de las reglas utilizadas.

## PROCESO DE DESENCRIPTACIÓN

### ESQUEMA DE TRANSFORMACIÓN DE X'' A X'
![Esquema de X'' a X'](ruta/a/tu/imagen_x2_a_x1.png)

Aquí se detalla el proceso de volver a transformar el texto encriptado (X'') a su forma anterior (X'). Este paso es crucial, ya que implica aplicar las reglas inversas a las de la encriptación para recuperar el texto original.

### ESQUEMA DE TRANSFORMACIÓN DE X' A X
![Esquema de X' a X](ruta/a/tu/imagen_x1_a_x.png)

Finalmente, en este esquema, se lleva a cabo la conversión del texto encriptado (X') a su forma completamente legible (X). Este último paso completa el ciclo de transformación, asegurando que el texto original pueda ser restaurado con precisión.

