#lang racket

;1

(define (filtrar-pares lista)
  (if (null? lista)
      '()
      
  (if (even? (first lista))
      (cons (first lista) (filtrar-pares (rest lista)))

      (filtrar-pares (rest lista)))))

(filtrar-pares '(1 2 3 4 5 6))

;2

(require racket/string);

(define (correo-valido? correo)
  (regexp-match? #px"^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}$" correo))

(define (filtrar-correos-validos lista-correos)
  (filter correo-valido? lista-correos))

(define correos '("stephano.mejia@dominio.com"
                  "stephano.mejia1@dominio."
                  "stephano.mejia2@dominio.com"
                  "stephano.mejia3@dominio.com"))

(filtrar-correos-validos correos)

;3

(define (suma n1 n2)
  (+ n1 n2))

(define (resta n1 n2)
  (- n1 n2))
(define (multiplicar n1 n2)
  (* n1 n2))


(define (dividir n1 n2)
  (if (= n2 0)
      "no se puede dividir por cero"
      (/ n1 n2)))


(define (calculadora operador n1 n2)
  (if (equals? operador "+")
      (suma n1 n2)
      (if (equals? operador "-")
          (resta n1 n2)
          (if (equals? operador "*")
              (multiplicar n1 n2)
              (if(equals? operador "/")
                 (dividir n1 n2)
                 "No se puede")))))
  



(calculadora "/" 1 2)

; 4
(define (calculadora-consola)
  (display "Ingrese el primer numero: ")
  (let ((primer-numero (read)))
      (display "Ingrese el segundo numero: ")
      (let ((segundo-numero (read)))
          (display "Ingrese el operador: ")
              (let ((operador (read)))
               (calculadora operador primer-numero segundo-numero)))))



(calculadora-consola)





















