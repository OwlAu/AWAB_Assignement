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

export default class AddPurchase extends Component {
    constructor() {
        super();
        this.state = {
            purchase: [],
            newpurchaseModal: false,
        };
    }

    render() {
        return <Button>Place order here</Button>;
    }
}

if (document.getElementById("addpurchase")) {
    ReactDOM.render(<AddPurchase />, document.getElementById("addpurchase"));
}
