import axios from "axios";
import React, { Component } from "react";
import ReactDOM from "react-dom";

export default class Counter extends Component {
    constructor() {
        super();
        this.state = {
            count: 0
        };

        this.counterIncrement = this.counterIncrement.bind(this);
        this.counterDecrement = this.counterDecrement.bind(this);
    }

    counterIncrement(e) {
        this.setState({ count: this.state.count + 1 });
    }

    counterDecrement(e) {
        if (this.state.count > 0) {
            this.setState({ count: this.state.count - 1 });
        }
    }

    render() {
        return (
            <div className="container">
                <div className="row ">
                    <div className="col">
                        <span>{this.firstCounter()}</span>
                        <button id="add-btn">
                            <span onClick={this.counterIncrement}>Add</span>
                        </button>
                        <button id="delete-btn" className="hide-delete-btn">
                            <span onClick={this.counterDecrement}>Delete</span>
                        </button>
                    </div>
                </div>
            </div>
        );
    }

    firstCounter() {
        const count = this.state.count;
        return count;
    }
}

if (document.getElementById("counterApp")) {
    ReactDOM.render(<Counter />, document.getElementById("counterApp"));
}
