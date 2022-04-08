# PWD2022 TP4: Namespaces

- Link a la teoría: [https://hackmd.io/@lgraziani2712/SkfXjHRQ\_](https://hackmd.io/@lgraziani2712/SkfXjHRQ_)

El objetivo de este práctico es introducirles en el concepto de namespaces (o espacios de nombre), como mecanismo de importación de código entre distintos archivos. Es un concepto central para la construcción de sistemas sólidos en PHP.

**Importante**: tengan la teoría siempre a mano como machete. Recuerden que no necesitan memorizarlo todo.

## Requisitos para la entrega y evaluación del trabajo

- Resolver todos los objetivos.
- Verificar que los tests pasen.
- Respetar las reglas definidas en la teoría respecto a los namespaces. Ignorar el uso correcto de mayúsculas y minúsculas será motivo para pedir rehacer el trabajo.
- La nota del TP tendrá un valor aprobado/desaprobado que se tendrá en cuenta para la promoción de la materia.

## Objetivos del práctico

- Agregar la configuración adecuada en el archivo `composer.json` para poder utilizar la carpeta `src` como carpeta raíz del namespace `Raiz`.
- Crear los siguientes archivos a partir de los namespaces definidos a continuación:
  1. La clase `Principal` del namespace `Raiz`.
  2. La clase `Termo` del namespace `Raiz\Modelos`. Debe definir un método público `validar` que devuelva `true`.
  3. La clase `TermoConstructor` del namespace `Raiz\Constructores`. Debe definir un método público `validar` que devuelva `true`.
- Importar las clases `Termo` y `TermoConstructor` en la clase `Principal`.
- Definir dos atributos privados en la clase `Principal` para almacenar instancias de esas dos clases. Deben estar correctamente tipadas.
- Definir el constructor para la clase `Principal` donde cree las instancias de las otras dos clases y las guarde en los atributos correspondientes.
- Crear el método público `validar` que devuelva el resultado de un `AND` entre los métodos `validar` de las otras dos instancias.

## Comandos necesarios

Para poder programar bien, deben correr los siguientes dos comando en la raíz del proyecto:

```
yarn

composer install
```

Se encargará de instalar la herramienta de autoformateo de PHP. Ya con esto, podrán programar y despreocuparse del formato del código.
