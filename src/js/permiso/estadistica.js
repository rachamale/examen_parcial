import { Dropdown } from "bootstrap";
import Chart from "chart.js/auto";
import { Toast } from "../funciones";

const canvas = document.getElementById('chartPermisos')
const btnActualizar = document.getElementById('btnActualizar')
const context = canvas.getContext('2d');

const chartVentas = new Chart(context, {
    type : 'pie',
    data : {
        labels : [],
        datasets : [
            {
                label : 'Usuarios',
                data : [],
                backgroundColor : []
            },
        ]
    },
    options : {
        indexAxis : 'y'
    }
})

const getEstadisticas = async () => {
    const url = `/examen_parcial/API/permisos/estadisticaPerm`;
    const config = {
        method : 'GET'
    }

    try {
        const respuesta = await fetch(url, config)
        const data = await respuesta.json();

        chartVentas.data.labels = [];
        chartVentas.data.datasets[0].data = [];
        chartVentas.data.datasets[0].backgroundColor = []

        if(data){

            data.forEach( registro => {
                chartVentas.data.labels.push(registro.rol_nombre)
                chartVentas.data.datasets[0].data.push(registro.cantidad_usuarios)
                chartVentas.data.datasets[0].backgroundColor.push(getRandomColor())
            });

        }else{
            Toast.fire({
                title : 'No se encontraron registros',
                icon : 'info'
            })
        }
        
        chartVentas.update();
       
    } catch (error) {
        console.log(error);
    }
}

const getRandomColor = () => {
    const r = Math.floor( Math.random() * 256)
    const g = Math.floor( Math.random() * 256)
    const b = Math.floor( Math.random() * 256)

    const rgbColor = `rgba(${r},${g},${b},0.5)`
    return rgbColor
}

getEstadisticas();

btnActualizar.addEventListener('click', getEstadisticas )

