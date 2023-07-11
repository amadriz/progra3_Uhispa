 

  var msg;
            
            function saludar(){
                let msg_secundario;
                
                msg_secundario = 'Hola pura vida';
                
                return false;
                //alert(msg_secundario);
                console.log(msg_secundario);
                
                return msg_secundario;
                
            }
            
            function validar(){
                let nombre = document.getElementById('txt_nombre').value;
                
                if(nombre==''){
                    //alert('Error, el nombre es un campo requerido!');
                    document.getElementById('txt_nombre').value ='Error, el nombre es un campo requerido!';
                }else{
                    
                    alert('Enviado!!');
                }
                
            }
            
            function ciclos(){
                let numero = [1,2,3,4,5,6];
                let nombre = [['Mario','Maria','Laura'],['Sandra','Luis','Pedro']];
                let acum = '';
                for(i=0; i <= (numero.length-1);i++){                    
                    //console.log(numero[i]); 
                      acum = acum + ' ' + numero[i];
                }
               
                
                document.getElementById('cinco').innerHTML = "<h1>"+acum+"</h1>";
                
                
                
                const ALTURA_CANVAS = 200,
	ANCHURA_CANVAS = 400;

// Obtener el elemento del DOM
const canvas = document.querySelector("#canvas");
canvas.width = ANCHURA_CANVAS;
canvas.height = ALTURA_CANVAS;
// Del canvas, obtener el contexto para poder dibujar
const contexto = canvas.getContext("2d");
// Estilo de dibujo
// Grosor de línea
contexto.lineWidth = 5;
// Color de línea
contexto.strokeStyle = "#212121";
// Color de relleno
contexto.fillStyle = "#FFCC80";
// Las variables indican el nombre de cada argumento para
// la función arc
let x = 100,
	y = 100,
	radio = 50,
	anguloInicio = 0,
	anguloFin = Math.PI * 2;
contexto.arc(x, y, radio, anguloInicio, anguloFin);
// Hacemos que se dibuje
contexto.stroke();
// Lo rellenamos
contexto.fill();

            }