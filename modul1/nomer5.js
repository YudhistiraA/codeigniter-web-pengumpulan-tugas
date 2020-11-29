class  lingkaran{
constructor(r){
    this.r=r
}
luas(){
    return this.r*this.r*3.14
}
keliling(){
    return this.r+this.r*3.14
}
}
class  bola extends lingkaran{
    constructor(r){
       super(r)
       
    }
    luaspermukaan(){
        return this.r*this.r*3.14*4
    }
    volume(){
        return 4/3*this.r*this.r*this.r*3.14
    }
    luasselimut(){
        return this.r*this.r*3.14*2
    
    }
    }
    class  kerucut extends lingkaran{
        constructor(r,t,s){
           super(r)
           this.t=t
           this.s=s
        }
        luaspermukaan(){
            return this.r*this.r*3.14 + this.r*3,14*this.s
        }
        volume(){
            return 1/3*this.r*this.r*3.14*this.t
        }
        luasselimut(){
            return this.r*3,14*this.s
        }
        }
        class  tabung extends lingkaran{
            constructor(r,t){
               super(r)
               this.t=t
              
            }
            luaspermukaan(){
                return 2*this.r*3.14*(this.r+this.t)
            }
            volume(){
                return this.r*this.r*3.14*this.t
            }
            luasselimut(){
                return this.r*3,14*this.t
            }
            }

            let o = new bola(15)
            console.log("luas permukaan bola =" + o.luaspermukaan());
            console.log("volume bola =" + o.volume());
            console.log("luas selimut bola =" + o.luasselimut());

            let b = new kerucut(10,40,20)
            console.log("luas permukaan kerucut =" + b.luaspermukaan());
            console.log("volume kerucut =" + b.volume());
            console.log("luas selimut kerucut =" + b.luasselimut());

            let d = new tabung(7.5,50)
            console.log("luas permukaan tabung =" + d.luaspermukaan());
            console.log("volume tabung =" + d.volume());
            console.log("luas selimut tabung =" + d.luasselimut());
