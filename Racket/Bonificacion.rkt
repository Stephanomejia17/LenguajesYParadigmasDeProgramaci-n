#lang racket

(define (comparar dia digito)
  (if (string=? dia "Lunes") 
      (if (or (= digito 3) (= digito 4))
          "Tienes pico y placa"
          "No tienes pico y placa")
  (if (string=? dia "Martes") 
      (if (or (= digito 2) (= digito 8))
          "Tienes pico y placa"
          "No tienes pico y placa")
  (if (string=? dia "Miercoles") 
      (if (or (= digito 5) (= digito 9))
          "Tienes pico y placa"
          "No tienes pico y placa")
  (if (string=? dia "Jueves") 
      (if (or (= digito 1) (= digito 7))
          "Tienes pico y placa"
          "No tienes pico y placa")
  (if (string=? dia "Viernes") 
      (if (or (= digito 0) (= digito 6))
          "Tienes pico y placa"
          "No tienes pico y placa")
      
      
      "El día no existe"))))))

(define (pico-y-placa)
  (display "Ingrese el último dígito de su placa: ")
  (let ((digito (read))) 
    (display "Ingrese el día: ")
    (let ((dia (symbol->string (read)))) 
      (displayln (comparar dia digito)))))

(pico-y-placa)
