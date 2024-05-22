Algoritmo encuesta_sactificacion
	Productos <- 5 
	
	Escribir "Encuesta de sactificacion ";
	Dimension product[5]
	Para i<-1 Hasta 5 Con Paso 1 Hacer
		Escribir "Ingrese el nombre del producto ", i;
		Leer product[i]
	Fin Para
	
	Para j<-1 Hasta 5 Con Paso 1 Hacer
		Escribir "Ingrese la calificacion del producto ", product[j];
		Leer calif
		suma<- suma+calif
	Fin Para
	
	canti <- 5
	promedio <- suma / canti
	
	Escribir "El promedio es: ", promedio
FinAlgoritmo
