const express = require('express')
const app = express()
const PORT = process.env.PORT || 4400

app.get("/", (req,res)=>{
    res.json({msg:"App runnig"})
})

app.get("/users", (req,res)=>{
    let data = [
        {
            name:"james",
            email:"aj@gmail.com",
            contant:{
                phone:"+234-094-944",
                address:"no 5, ademeus roac, fct."
            }
        }

    ]
    res.json(data)
})

app.listen(PORT)
console.log('App is running on port' +PORT)