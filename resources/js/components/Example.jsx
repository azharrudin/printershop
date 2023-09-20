import React, { useEffect, useState } from 'react';
import ReactDOM from 'react-dom/client';
import axios from 'axios';
import Button from '@mui/material/Button';
import { styled } from '@mui/material/styles';
import Card from '@mui/material/Card';
import CardHeader from '@mui/material/CardHeader';
import CardMedia from '@mui/material/CardMedia';
import CardContent from '@mui/material/CardContent';
import CardActions from '@mui/material/CardActions';
import Collapse from '@mui/material/Collapse';
import Avatar from '@mui/material/Avatar';
import Typography from '@mui/material/Typography';
import { red } from '@mui/material/colors';

function ProductCard() {
    const [data, setData] = useState([]);
    useEffect(() => {
        axios.get('/items/fetch')
        .then((response) => {
          setData(response.data); // Update the state with fetched data
        })
    },[]);
    return (
        <div className="container">
            <div className="row justify-content-center">
            {data.map((item) => (
                <Card sx={{ maxWidth: 345 }}>
                <CardMedia
                  sx={{ height: 140 }}
                  image="/static/images/cards/contemplative-reptile.jpg"
                  title="green iguana"
                />
                <CardContent>
                  <Typography gutterBottom variant="h5" component="div">
                    Lizard
                  </Typography>
                  <Typography variant="body2" color="text.secondary">
                    Lizards are a widespread group of squamate reptiles, with over 6,000
                    species, ranging across all continents except Antarctica
                  </Typography>
                </CardContent>
                <CardActions>
                  <Button size="small">Share</Button>
                  <Button size="small">Learn More</Button>
                </CardActions>
              </Card>
              ))}
             </div>
        </div>
    );
}

export default ProductCard;

if (document.getElementById('example')) {
    const Index = ReactDOM.createRoot(document.getElementById("example"));

    Index.render(
        <React.StrictMode>
            <ProductCard/>
        </React.StrictMode>
    )
}
