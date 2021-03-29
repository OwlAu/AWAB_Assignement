import axios from "axios";
import React, { Component } from "react";
import ReactDOM from "react-dom";
import {
    Table,
    Button,
    Modal,
    ModalHeader,
    ModalBody,
    ModalFooter,
    Input,
    FormGroup,
    Label,
} from "reactstrap";

export default class AddFavorite extends Component {
    render() {
        return <Button>Add favorite</Button>;
    }
}

if (document.getElementById("addfavorite")) {
    ReactDOM.render(<AddFavorite />, document.getElementById("addfavorite"));
}
