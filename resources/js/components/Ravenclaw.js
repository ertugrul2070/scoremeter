import axios from "axios";
import React, { Component } from "react";
import ReactDOM from "react-dom";

export default class Ravenclaw extends Component {
    constructor(props) {
        super(props);
        this.state = {
            counters: [
                { id: 1, amount: 0 },
                { id: 2, amount: 0 },
                { id: 3, amount: 0 },
                { id: 4, amount: 0 },
                { id: 5, amount: 0 }
            ]
        };
        this.counterIncrement = this.counterIncrement.bind(this);
        this.counterDecrement = this.counterDecrement.bind(this);
    }
    counterIncrement(index) {
        this.setState(prevState => {
            const counters = [...prevState.counters];
            counters[index] = {
                ...counters[index],
                amount: counters[index].amount + 1
            };
            return { counters };
        });
    }

    counterDecrement(index) {
        if (this.state.counters[index].amount > 0) {
            this.setState(prevState => {
                const counters = [...prevState.counters];
                counters[index] = {
                    ...counters[index],
                    amount: counters[index].amount - 1
                };
                return { counters };
            });
        }
    }

    render() {
        return (
            <CounterBody
                counters={this.state.counters}
                onDecrement={this.counterDecrement}
                onIncrement={this.counterIncrement}
            />
        );
    }
}

const CounterBody = ({ counters, onDecrement, onIncrement }) => (
    <div className="counter-container">
        <div className="counter-wrap">
            <h1>Ravenclaw</h1>
            {/*Loop voor aantal counters */}
            {counters.map((counter, index) => (
                <div class="counter-body" key={counter.id}>
                    <button onClick={() => onDecrement(index)}>Delete</button>
                    <span>{counter.amount}</span>
                    <button onClick={() => onIncrement(index)}>Add</button>
                </div>
            ))}
        </div>
    </div>
);
if (document.getElementById("Ravenclaw")) {
    ReactDOM.render(<Ravenclaw />, document.getElementById("Ravenclaw"));
}
