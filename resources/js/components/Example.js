import React, { Component } from "react";
import ReactDOM from "react-dom";

export default class Example extends Component {
    constructor() {
        super();
        this.state = {
            count1: 0,
            count2: 0,
            count3: 0,
            count4: 0
        };
    }

    render() {
        return (
            <div className="container">
                <div className="row ">
                    <div className="col">
                        <span>{this.firstCounter()}</span>
                    </div>
                    <div className="col">
                        <span>{this.secondCounter()}</span>
                    </div>
                    <div className="col">
                        <span>{this.thirdCounter()}</span>
                    </div>
                    <div className="col">
                        <span>{this.fourthCounter()}</span>
                    </div>
                </div>
            </div>
        );
    }

    firstCounter() {
        const { count1 } = this.state;
        return { count1 };
    }

    secondCounter() {
        const { count2 } = this.state;
        return { count2 };
    }

    thirdCounter() {
        const { count3 } = this.state;
        return { count3 };
    }

    fourthCounter() {
        const { count4 } = this.state;
        return { count4 };
    }
}

if (document.getElementById("example")) {
    ReactDOM.render(<Example />, document.getElementById("example"));
}
