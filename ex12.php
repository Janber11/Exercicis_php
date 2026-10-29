/*
APUNTS

    Declarar:
        - function peu(): void{
            echo '<footer>....</footer>';
        }
    Cridar:
        peu();
        peu();
        peu();
        // s'executa 3 vegades

    Els Paràmetres:
        function targeta(string $nom, float $preu, int $estoc): void{
            echo "<h3>$nom</h3><p>$preu EUR - $estoc unitats</p>";
        }
        targeta('Teclat mecanic',79.90, 4); // l'ordre importa

    Valors per Defecte:
        function preuAmbIva(float $base, float $ia = 0.21): float {
            return round($base * (1 + $iva), 2);
        }

        preuAmbIva(100);
        preuAmbIva(100, 0.10);

    Tipus de estrictes
        declare(strict_types=1);

    L'ambint que veu la funció
        $botiga = 'BitBazar';

        function mostra(): string {
            return 'Som a ' . $botiga; // No es veu
        } // warning undefined variable
    
    Funcions que treballen amb arrays
        function disponibles(array $p): array {
            $res = [];
            foreach ($p as $item) {
                if ($item['stock'] > 0 ) {
                    $res[] = $item; 
                }
            return $res;
            }
        }
*/