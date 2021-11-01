<div>
   <p>
      Estimado/a, 
   </p>
   <p>
      A continuación, podrá encontrar el resultado de la prueba realizada, recuerde que esta es solo una evaluación orientativa y no reemplaza la opinión de un médico. Solo permite tener una primera señal de alerta sobre alguna dificultad en las áreas evaluadas.
   </p>
   <p>
      Nombre: {{$user_name}} <br>
      Fecha de Nacimiento: {{$user_birthday}} <br>
      Edad: {{$user_age}} <br>
      Fecha de evaluación: {{$today}}
   </p>
   <p>
      Respecto a la Percepción de los colores hubo un {{$porcentaje_daltonismo}}% de respuestas correctas. <br>
      Respecto a la Lectura y Ortografía hubo un {{$porcentaje_disortografia}}% de respuestas correctas. <br>
      Respecto a la Matemáticas, Cálculo y Razonamiento Lógico hubo un {{$porcentaje_discalculia}}% de respuestas 
      correctas. <br>
   </p>
   @if(!$all_ok)
      <p>
         En base al análisis de los resultados obtenidos se concluye que deberías consultar con un profesional respecto 
         a las siguientes áreas: {{$diagnostico}}.
      </p>
   @else
      <p>
         En base al análisis de los resultados obtenidos se concluye que los resultados fueron satisfactorios sobre las areas mencionadas.
      </p>
   @endif
   <p> 
      Estos resultados son útiles para el tratamiento temprano de las Dificultades Específicas de Aprendizaje que son 
      habituales en los niños y que su detección temprana es crucial para el correcto desarrollo de este. Un bajo 
      rendimiento en la evaluación no siempre está asociado a dificultades en el aprendizaje, existen otras situaciones 
      que el niño puede estar viviendo actualmente que pueden afectar al rendimiento académico. Pero, aun así, es mejor 
      no pasar por alto las primeras señales y consultar siempre con un profesional al respecto.
   </p> 
   <p>
      Atentamente,
   </p>
   <p>
      Equipo DetectAR.
   </p>
</div>


