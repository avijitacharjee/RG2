import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Chart2 extends Component {
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">Hello world</div>

                            <div className="card-body">I'm an react</div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('chart2')) {
    ReactDOM.render(<Chart2 />, document.getElementById('chart2'));
}
