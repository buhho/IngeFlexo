SELECT * FROM [dbo].Persons;

SELECT a.idMoneda, a.valor, a.fecha
FROM [dbo].tFinTasasCambio a
WHERE a.fecha = (
    SELECT MAX(b.fecha)
    FROM tFinTasasCambio b
    WHERE b.idMoneda = a.idMoneda
)
ORDER BY a.idMoneda
;
