import React, { useEffect, useState } from "react";
import ReactDOM from "react-dom/client";
import axios from "axios";
import Button from "@mui/material/Button";
import { styled } from "@mui/material/styles";
import Card from "@mui/material/Card";
import CardHeader from "@mui/material/CardHeader";
import CardMedia from "@mui/material/CardMedia";
import CardContent from "@mui/material/CardContent";
import CardActions from "@mui/material/CardActions";
import Collapse from "@mui/material/Collapse";
import Avatar from "@mui/material/Avatar";
import Typography from "@mui/material/Typography";
import { red } from "@mui/material/colors";
import NavigationBar from "./Navbar";
function harga(x) {
    return x;
}
var keranjang = {};
var total_items = 0;
function ProductCard() {
    const [data, setData] = useState([]);
    const [items, setItems] = useState({});
    const [total, setTotal] = useState(0);
    function tambahKeranjang(product) {
        if (keranjang[product["namaprinter"]] == undefined) {
            keranjang[product["namaprinter"]] = [product];
        } else if (keranjang[product["namaprinter"]] != undefined) {
            keranjang[product["namaprinter"]].push(product);
        }
        total_items++;
        setTotal(total_items);
        setItems(keranjang);
    }
    function kurangKeranjang(product) {

        if (keranjang[product["namaprinter"]] != undefined && keranjang[product["namaprinter"]].length == 0) {
            keranjang[product["namaprinter"]] = undefined;
            console.log(keranjang[product["namaprinter"]])
        } else if (keranjang[product["namaprinter"]] != undefined) {
            keranjang[product["namaprinter"]].pop();
        }
        if(total_items > 0) total_items--;
        setTotal(total_items);
        setItems(keranjang);
    }
    useEffect(() => {
        axios.get("/items/fetch").then((response) => {
            setData(response.data.data); // Update the state with fetched data
        });
    }, []);
    return (
        <div>
            <NavigationBar total={total_items} items={items} />
            <div className="container mt-3">
                <div className="row justify-content-start">
                    {data.map((item) => (
                        <Card sx={{ maxWidth: 345 }} className="m-2">
                            <CardMedia
                                sx={{ height: 140 }}
                                image="/static/images/cards/contemplative-reptile.jpg"
                                title="green iguana"
                            />
                            <CardContent>
                                <Typography
                                    gutterBottom
                                    variant="h5"
                                    component="div"
                                >
                                    {item["namaprinter"]}
                                </Typography>
                                <Typography
                                    variant="body2"
                                    color="text.secondary"
                                >
                                    {item["spesifikasi"]}
                                </Typography>
                            </CardContent>
                            <CardActions>
                                <Button size="small" variant="body2">
                                    {harga(item["harga"])}
                                </Button>
                                <Button
                                    size="small"
                                    className="mx-0 px-0 bg-dark text-white"
                                    onClick={() => tambahKeranjang(item)}
                                >
                                    +
                                </Button>
                                <Button
                                    size="small"
                                    className="text-white mx-2 px-0 bg-danger"
                                    onClick={() => kurangKeranjang(item)}
                                >
                                    -
                                    </Button>
                                    <Button
                                    size="small"
                                    className="mx-0 px-0"
                                >
                                    {items[item["namaprinter"]] != undefined ? items[item["namaprinter"]].length : 0}
                                    </Button>
                            </CardActions>
                        </Card>
                    ))}
                </div>
            </div>
        </div>
    );
}

export default ProductCard;

if (document.getElementById("navbar")) {
    const Index = ReactDOM.createRoot(document.getElementById("navbar"));

    Index.render(<React.StrictMode></React.StrictMode>);
}

if (document.getElementById("example")) {
    const Index = ReactDOM.createRoot(document.getElementById("example"));

    Index.render(
        <React.StrictMode>
            <ProductCard />
        </React.StrictMode>
    );
}
