const mongoose = require('mongoose')
const ItemSchema = new mongoose.Schema({
    name:{trype:String, required:true},
    price:{trype:String, required:true},
    image:{trype:String},
    descp:{trype:String, required:true}

});
const Item = mongoose.Model('items', ItemSchema);
module.exports = Item