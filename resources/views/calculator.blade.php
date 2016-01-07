@include('header')
<div class="row">
  <div class="col-lg-8 col-lg-offset-2 col-sm-12">
    <div class="row">
      <div class="col-lg-12 text-center header">
        <h3>Welcome to Quintesselator!</h3>
        <p>The magnificent calculator</p>
      </div>
    </div>
    <div class="row well main">
      <div class="col-lg-7 col-sm-12 calculator">
          <div class="row display">
            <div class="col-lg-12">
              <textarea rows="2" id="calculatorDisplay" class="form-control"></textarea>
            </div>
          </div>
          <div class="row calculatorButtons">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <button type="button" class="btn btn-warning operationButton" value="←">←</button>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <button type="button" class="btn btn-warning operationButton" value="C">C</button>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <button type="button" class="btn btn-danger operationButton" value="AC">AC</button>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <button type="button" class="btn btn-primary calcButton" value="/">÷</button>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <button type="button" class="btn btn-default calcButton number" value="7">7</button>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <button type="button" class="btn btn-default calcButton number" value="8">8</button>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <button type="button" class="btn btn-default calcButton number" value="9">9</button>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <button type="button" class="btn btn-primary calcButton" value="*">x</button>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <button type="button" class="btn btn-default calcButton number" value="4">4</button>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <button type="button" class="btn btn-default calcButton number" value="5">5</button>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <button type="button" class="btn btn-default calcButton number" value="6">6</button>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <button type="button" class="btn btn-primary calcButton" value="-">-</button>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <button type="button" class="btn btn-default calcButton number" value="1">1</button>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <button type="button" class="btn btn-default calcButton number" value="2">2</button>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <button type="button" class="btn btn-default calcButton number" value="3">3</button>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <button type="button" class="btn btn-primary calcButton" value="+">+</button>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <button type="button" class="btn btn-default calcButton number" value="0">0</button>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <button type="button" class="btn btn-default calcButton number" value=".">.</button>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <button type="button" id="equalsButton" class="btn btn-success operationButton" value="=">=</button>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="col-lg-5 col-sm-12 log">
        <div id="historyLog">
        </div>
      </div>
    </div>
  </div>
</div>
@include('footer')