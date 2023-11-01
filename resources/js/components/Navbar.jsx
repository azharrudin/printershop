import { Navbar, Nav, NavDropdown } from 'react-bootstrap';
import Swal from 'sweetalert2'
import withReactContent from 'sweetalert2-react-content'
function NavigationBar(data){

const MySwal = withReactContent(Swal)

  const handle = (data_) => {
    var text = ""
    for( var x in data_.items){
      text += `${x.toUpperCase()}: ${data_.items[x].length}/pcs<hr>`
    }
    MySwal.fire({
      title: <p>Checkout</p>,
      html: text,

      showConfirmButton: true,
      confirmButtonText: "Confirm"
    }).then(() => {
      MySwal.showLoading();
      MySwal.fire(<p>Shorthand works too</p>)
    })
  }
    return (
    <Navbar bg="light" expand="lg" className='px-5 py-4 bg-dark'>
      <Navbar.Brand href="#" className='text-white'>PrinterShop</Navbar.Brand>
      <Navbar.Toggle aria-controls="basic-navbar-nav" />
      <Navbar.Collapse id="basic-navbar-nav" className='d-flex justify-content-end'>
        <Nav className="mr-auto">
          <Nav.Link href="#" className='text-white'>Products</Nav.Link>
          <Nav.Link href="#" onClick={() => handle(data)} className='text-white'>Cart ({data.total})</Nav.Link>
    
        </Nav>
      </Navbar.Collapse>
    </Navbar>
    )
}
export default NavigationBar