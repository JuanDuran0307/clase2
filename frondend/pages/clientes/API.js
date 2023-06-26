const urlClientes = "http://localhost/ArTeM01-055/clase2/backend/controller.php?op=GetAll";

export const getClientes = async ()=>{
    try {
        const clientes = await fetch(urlClientes);
        const datosClientes = clientes.json();
        return datosClientes;
        
    } catch (error) {
        console.log(error);
    }

}