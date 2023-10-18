import ReactDOM from 'react-dom/client';
import axios from 'axios';
import Button from '@mui/material/Button';
import Card from '@mui/material/Card';
import CardMedia from '@mui/material/CardMedia';
import CardContent from '@mui/material/CardContent';
import CardActions from '@mui/material/CardActions';
import { Navbar, Nav, NavDropdown } from 'react-bootstrap';
function NavigationBar(data){
    return (
    <Navbar bg="light" expand="lg" className='px-5'>
      <Navbar.Brand href="#">PrinterShop</Navbar.Brand>
      <Navbar.Toggle aria-controls="basic-navbar-nav" />
      <Navbar.Collapse id="basic-navbar-nav" className='d-flex justify-content-end'>
        <Nav className="mr-auto">
          <Nav.Link href="#">Products</Nav.Link>
          <Nav.Link href="#">Cart ({data.total})</Nav.Link>
      
        </Nav>
      </Navbar.Collapse>
    </Navbar>
    )
}
export default NavigationBar