import { getClientes}  from "./API.js";

addEventListener('DOMContentLoaded',()=>{
    cargarClientes();

})

async function cargarClientes(){


    const clientes = await getClientes();
    const tablaClientes = document.querySelector('#datosClientes');
    clientes.forEach(element => {
        const {ClienteID,Compania,Contacto,Direccion}=element ;
        tablaClientes.innerHTML += `
        <tr>
            <th scope="row">${ClienteID}</th>
            <td>${Compania} </td>
            <td>${Contacto} </td>
            <td>${Direccion} </td>
        </tr>
        `
        
    });
    console.log(clientes);

}