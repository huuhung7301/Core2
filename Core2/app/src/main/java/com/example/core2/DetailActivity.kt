package com.example.core2;

import android.os.Build
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.ImageView
import android.widget.RatingBar
import android.widget.TextView
import androidx.annotation.RequiresApi


class DetailActivity : AppCompatActivity() {
    var callbackImage: Int = R.id.image1
    @RequiresApi(Build.VERSION_CODES.M)
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_detail)

        val location = intent.getParcelableExtra<Location>("location")
        val detailName = findViewById<TextView>(R.id.name)
        val detailCity = findViewById<TextView>(R.id.loc)
        val detailDate = findViewById<TextView>(R.id.date)
        val detailRating = findViewById<RatingBar>(R.id.bar)
        val detailImage = findViewById<ImageView>(R.id.detailImage)

        location?.apply {
            detailName.text = name
            detailCity.text = city
            detailRating.rating = rating.toFloat()
            detailDate.text = date
            detailImage.setImageDrawable(getDrawable(imageIdentifier))
            var style = R.style.north //default style
            when (imageIdentifier) {
                R.drawable.image1 -> style = R.style.north
                R.drawable.image2 -> style = R.style.south
                R.drawable.image3 -> style = R.style.east
                R.drawable.image4 -> style = R.style.west
            }
            detailName.setTextAppearance(style)
            detailDate.setTextAppearance(style)
            detailCity.setTextAppearance(style)
            callbackImage = imageIdentifier
        }
    }
}