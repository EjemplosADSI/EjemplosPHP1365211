<?php

/** Las interfaces de objetos permiten crear código con el cual 
 * especificar qué métodos deben ser implementados por una clase, 
 * sin tener que definir cómo estos métodos son manipulados.
 * 
 * Las interfaces se definen de la misma manera que una clase, 
 * aunque reemplazando la palabra reservada class por la palabra 
 * reservada interface y sin que ninguno de sus métodos tenga 
 * su contenido definido.
 * 
 * Todos los métodos declarados en una interfaz deben ser públicos, 
 * ya que ésta es la naturaleza de una interfaz. */

 /** Para implementar una interfaz, se utiliza el operador implements. 
  * Todos los métodos en una interfaz deben ser implementados dentro 
  *de la clase; el no cumplir con esta regla resultará en un error fatal. 
  *Las clases pueden implementar más de una interfaz si se deseara, 
  *separándolas cada una por una coma. */

  /** Constantes: Es posible tener constantes dentro de las interfaces. 
   * Las constantes de interfaces funcionan como las constantes de 
   * clases excepto porque no pueden ser sobrescritas por 
   * una clase/interfaz que las herede. */

// Declarar la interfaz 'iTemplate'
interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}

// Implementar la interfaz
// Ésto funcionará 
class Template implements iTemplate
{
    private $vars = array();
  
    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
  
    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }
 
        return $template;
    }
}
// Ésto no funcionará
// Error fatal: La Clase BadTemplate contiene un método abstracto
// y por lo tanto debe declararse como abstracta (iTemplate::getHtml)
class BadTemplate implements iTemplate
{
    private $vars = array();
  
    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
}
?>