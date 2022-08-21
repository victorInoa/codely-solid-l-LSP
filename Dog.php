<?php
    /**
     * Curso Principios SOLID de CodelyTV
     * Practica: Implementación del principio [L] [LSP] Liskov Substitution Principle
     * -------------------------------------------------------------------------------
     * Clase Dog que no implementa este principio ya que no implementa el método tweet y no se podría reemplazar por la clase padre y a nivel conceptual no van de la mano con el mismo propósito
     *
     */
    
    class Dog extends Bird
    {
        public function bark()
        {
            return 'JAW JAW';
        }
    }
