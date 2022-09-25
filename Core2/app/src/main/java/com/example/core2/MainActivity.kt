package com.example.core2;

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.util.Log
import android.widget.ImageView
import android.widget.RatingBar
import android.widget.TextView


class MainActivity : AppCompatActivity() {
    lateinit var locations: MutableList<Location>
    val lNames = arrayOf("Pho co Ha Noi","Sai Gon View","Da Nang palace","Bac Ninh big area")
    val lCities = arrayOf("Ha Noi","Ho Chi Minh","Da Nang","Bac Ninh")
    val lDates = arrayOf("2022-07-03","2022-06-09","2022-11-09","2022-09-24")
    val lRatings = arrayOf(4.0,5.0,4.0,5.0)
    val images = arrayOf(R.drawable.image1,R.drawable.image2,R.drawable.image3,R.drawable.image4)

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        //Main screen elements
        val name1 = findViewById<TextView>(R.id.name1)
        val bar1 = findViewById<RatingBar>(R.id.bar1)

        val name2 = findViewById<TextView>(R.id.name2)
        val bar2 = findViewById<RatingBar>(R.id.bar2)

        val name3 = findViewById<TextView>(R.id.name3)
        val bar3 = findViewById<RatingBar>(R.id.bar3)

        val name4 = findViewById<TextView>(R.id.name4)
        val bar4 = findViewById<RatingBar>(R.id.bar4)

        val image1 = findViewById<ImageView>(R.id.image1)
        val image2 = findViewById<ImageView>(R.id.image2)
        val image3= findViewById<ImageView>(R.id.image3)
        val image4 = findViewById<ImageView>(R.id.image4)
        locations = mutableListOf()

        //assign values to location
        for(i in 0..3) {
            val location = Location(lNames[i],lCities[i],lDates[i],lRatings[i],images[i])
            Log.i("Image added:",images[i].toString())
            locations.add(location)
        }

        //Create array to store elements:
        val names = arrayOf(name1,name2,name3,name4)
        val bars = arrayOf(bar1,bar2,bar3,bar4)
        val images = arrayOf(image1, image2, image3, image4)

        //Assign Values to Views
        for(i in 0..3) {
            locations[i].apply {
                names[i].text = name
                bars[i].rating = rating.toFloat() //Assign Rating to Bars
            }
        }
        //On-Click Listener
        for(i in 0..3) {
            images[i].setOnClickListener() {
                val intent = Intent(this, DetailActivity::class.java)
                intent.apply {
                    putExtra("location", locations[i])
                }
                startActivity(intent)
            }
        }
    }
}