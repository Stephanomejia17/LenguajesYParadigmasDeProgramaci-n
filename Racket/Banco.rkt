#lang racket
(struct pedido (id cliente monto))

; 1
; Generamos la lsta de pedidos
(define pedidos
  (list (pedido 1 "Cliente A" 150.0)
        (pedido 2 "Cliente B" 75.0)
        (pedido 3 "Cliente C" 200.0)
        (pedido 4 "Cliente D" 50.0)
        (pedido 5 "Cliente E" 300.0)))

(define umbral 100.0)
(define pedidos-filtrados
    (filter (lambda (p) (> (pedido-monto p) umbral)) pedidos))

(define total-ingresos
  (foldl (lambda (p acc) (+ (pedido-monto p) acc)) 0 pedidos-filtrados))
(printf "Total de ingresos de pedidos que superan el umbral de ~a: ~a\n" umbral total-ingresos)

;2
(struct account (id balance active) #:transparent)
(define accounts
  (list
   (account 1 1000 #t)
   (account 2 -50 #t)
   (account 3 200 #t)
   (account 4 500 #t)
   (account 5 0 #t)))

(define (deposit acc amount)
  (if (and (account-active acc) (positive? amount))
      (account (account-id acc) (+ (account-balance acc) amount) (account-active acc))
      acc))

(define (withdraw acc amount)
  (if (and (account-active acc)
           (positive? amount)
           (>= (account-balance acc) amount))
      (account (account-id acc) (- (account-balance acc) amount) (account-active acc))
      acc))

(define (filter-positive-active-accounts accounts)
  (filter (lambda (acc)
           (and (account-active acc) (> (account-balance acc) 0)))
          accounts))

(define (display-accounts accounts)
  (for-each (lambda (acc)
              (printf "Account ID: ~a, Balance: ~a, Active: ~a\n"
                      (account-id acc)
                      (account-balance acc)
                      (account-active acc)))
            accounts))

        