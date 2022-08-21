    /**
     * Curso Principios SOLID de CodelyTV
     * Practica: Implementación del principio [L] [LSP] Liskov Substitution Principle
     * -------------------------------------------------------------------------------
     * Clase Chicken que si conserva el principio de liskov
     *
     */

    class Chicken extends Bird
    {
        public function tweet()
        {
            return 'pio pio';
        }
    }
