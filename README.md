# Problema197

Desarrollado por **Christian Monrabal** y **Juan Carlos Prado** - DAW 2

Este proyecto tiene como objetivo desencriptar un texto que ha sido codificado en dos niveles. Partimos de un texto encriptado en su forma final (X'') y lo transformamos paso a paso hasta llegar al texto original (X). A continuación, se detallan las fases del proceso de desencriptación.

## Descripción del Proceso de Desencriptación

El proceso de desencriptación se realiza en dos etapas principales:

### 1. Desencriptación de X'' a X'

El texto inicial encriptado, denominado **X''**, se somete a una transformación para obtener una versión intermedia del mensaje, conocida como **X'**. Esta fase implica los siguientes pasos:

- **División en dos partes:** 
   - Separamos el texto en dos grupos: los caracteres en posiciones pares y los caracteres en posiciones impares.
   
- **Reconstrucción del texto intermedio:** 
   - Los caracteres en posiciones pares forman la "mitad izquierda".
   - Los caracteres en posiciones impares, leídos en orden inverso, forman la "mitad derecha".
   - Combinamos ambas mitades para formar el texto **X'**.

- **Diagrama de flujo sobre su logica**
![Desencriptación de X' a X](https://raw.githubusercontent.com/ChristianMonrabal/problemanum197/refs/heads/main/img/X2_X2.png)

### 2. Transformación de X' a X

Una vez que tenemos el texto intermedio **X'**, lo convertimos en el texto original **X** mediante los siguientes pasos:

- **Identificación de las vocales:** 
   - Las vocales actúan como puntos de referencia o "anclajes" que separan bloques de consonantes.
   
- **Reversión de los bloques de consonantes:** 
   - Para cada bloque de texto que se encuentra entre dos vocales, revertimos el orden de los caracteres (consonantes). Las vocales no cambian de posición.
   
- **Obtención del texto original (X):** 
   - Después de revertir los bloques de consonantes entre vocales, obtenemos el texto desencriptado original **X**.

- **Diagrama de flujo sobre su logica**
![Desencriptación de X'' a X'](https://raw.githubusercontent.com/ChristianMonrabal/problemanum197/refs/heads/main/img/X2_X1.png)

## Ejemplo de Desencriptación

Aquí se muestra un ejemplo del proceso de desencriptación paso a paso:

1. **Texto encriptado X''**:  
   `Aauirnedleiua nBo`

2. **Desencriptación X'' a X'**:  
   `AurelianoB uednia`

3. **Desencriptación X' a X**:  
   `Aureliano Buendia`

Este proceso garantiza que un texto encriptado pueda ser restaurado a su forma original de manera eficiente, siguiendo una serie de reglas lógicas bien definidas.

## Uso del Proyecto

Este proyecto incluye un formulario en la interfaz de usuario para introducir el texto encriptado **X''**. Al hacer clic en "Desencriptar", el sistema aplica las reglas mencionadas y muestra tanto el texto intermedio **X'** como el texto original **X**.

## Tecnologías Utilizadas

- **PHP**: Para manejar el procesamiento del texto y la lógica de desencriptación.
- **HTML/CSS**: Para la estructura y estilo de la interfaz de usuario.
